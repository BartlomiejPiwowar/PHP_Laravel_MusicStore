<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /*public function index(): View
    {
        return view('products.index')->with('products', Product::all());
    }*/
    public function index(Request $request): View
    {
        // Pobierz typ z zapytania (jeśli jest)
        $type = $request->input('type');

        // Jeśli typ jest ustawiony, filtruj produkty po typie
        if ($type) {
            $products = Product::where('type', $type)->get();
        } else {
            $products = Product::all();
        }

        // Przekaż produkty do widoku
        return view('products.index', compact('products'));
    }






    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        if (Auth::check() && Auth::user()->is_admin) { // Sprawdza, czy to admin
            return view('products.create'); // czy tam innny formularz dodawania produktu
        } else {
            abort(403, 'Nie masz uprawnień do tej akcji.');
        }
    }






    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        if (Auth::check() && Auth::user()->is_admin) { // to bedzie admin

            $types = ['Instrumenty smyczkowe', 'Instrumenty klawiszowe', 'Instrumenty strunowe', 'Instrumenty dęte', 'Instrumenty perkusyjne', 'Płyty', 'Śpiewniki', 'Inne'];

            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'description' => 'nullable',
                'price' => 'required|numeric|min:0',
                'quantity' => 'nullable',
                'type' => 'required|in:' . implode(',', $types),
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Obsługa przesłanego obrazu
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('products', 'public');
                $validatedData['image'] = $imagePath;
            }

            // Dodanie produktu do bazy
            Product::create($validatedData);

            return redirect()->route('products.index')->with('success', 'Produkt został dodany.');
        } else {
            abort(403, 'Brak uprawnień.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product): View
    {
        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product): \Illuminate\View\View
    {
        if (Auth::check() && Auth::user()->is_admin) {
            return view('books.edit', compact('product')); // Formularz edycji
        } else {
            abort(403, 'Nie masz uprawnień do tej akcji.');
        }
    }




    public function update(Request $request, Product $product): RedirectResponse
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $types = ['Instrumenty smyczkowe', 'Instrumenty klawiszowe', 'Instrumenty strunowe', 'Instrumenty dęte', 'Instrumenty perkusyjne', 'Płyty', 'Śpiewniki', 'Inne'];


            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'description' => 'nullable',
                'price' => 'required|numeric|min:0',
                'type' => 'required|in:' . implode(',', $types),
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Obsługa obrazu (jeśli przesłano nowy)
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('products', 'public');
                $validatedData['image'] = $imagePath;
            }

            $product->update($validatedData); // Aktualizuje dane produktu
            return redirect()->route('products.index')->with('success', 'Produkt został zaktualizowany!');
        } else {
            abort(403, 'Nie masz uprawnień do tej akcji.');
        }
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        if (Auth::check() && Auth::user()->is_admin) {
            $product->delete();
            return redirect()->route('products.index')->with('success', 'Produkt został usunięty!');
        } else {
            abort(403, 'Nie masz uprawnień do tej akcji.');
        }
    }



}
