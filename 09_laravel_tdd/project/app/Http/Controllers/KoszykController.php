<?php

namespace App\Http\Controllers;

use App\Models\Koszyk;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KoszykController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Pobierz produkty w koszyku bieżącego użytkownika
        $koszykItems = Koszyk::where('user_id', Auth::id())->get();
        return view('dashboard', compact('koszykItems'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $productId): RedirectResponse
    {
        $product = Product::findOrFail($productId);

        // Sprawdzamy, czy produkt już jest w koszyku
        $koszyk = Koszyk::where('user_id', Auth::id())
            ->where('product_id', $product->id)
            ->first();

        $koszyk = Koszyk::firstOrCreate(
            ['user_id' => Auth::id(), 'product_id' => $product->id],
            ['quantity' => 0]
        );
        $koszyk->quantity += 1;
        $koszyk->save();
        return redirect()->route('dashboard')->with('success', 'Produkt został dodany do koszyka!');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $koszykId): RedirectResponse
    {
        $koszykItem = Koszyk::findOrFail($koszykId);

        if ($request->input('action') === 'increase') {
            $koszykItem->quantity += 1;
        } elseif ($request->input('action') === 'decrease' && $koszykItem->quantity > 1) {
            $koszykItem->quantity -= 1;
        }

        $koszykItem->save();

        return redirect()->route('koszyk.index')->with('success', 'Zaktualizowano ilość produktu w koszyku.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($koszykId): RedirectResponse
    {
        $koszykItem = Koszyk::findOrFail($koszykId);
        $koszykItem->delete();

        return redirect()->route('dashboard')->with('success', 'Produkt został usunięty z koszyka!');
    }

    public function checkout()
    {
        $user = Auth::user();
        $koszykItems = Koszyk::where('user_id', $user->id)->get();

        if ($koszykItems->isEmpty()) {
            return redirect()->route('dashboard')->with('error', 'Koszyk jest pusty.');
        }

        // Obliczanie łącznej kwoty zamówienia
        $totalPrice = $koszykItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        // Zapis zamówienia w tabeli `orders`
        $order = Order::create([
            'user_id' => $user->id,
            'products' => $koszykItems->map(function ($item) {
                return [
                    'name' => $item->product->name,
                    'quantity' => $item->quantity,
                    'price' => $item->product->price,
                ];
            })->toJson(),
            'total_price' => $totalPrice,
            'status' => 'oczekujące',
        ]);

        // Opróżnienie koszyka
        Koszyk::where('user_id', $user->id)->delete();

        return redirect()->route('dashboard')->with('success', 'Zamówienie zostało złożone!');
    }
}
