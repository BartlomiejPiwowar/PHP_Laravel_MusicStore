<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index(): View
    {
        $favorites = Auth::user()->favorites;
        return view('favorites', compact('favorites'));
    }

    public function store(Product $product): RedirectResponse
    {
        Auth::user()->favorites()->attach($product->id);
        return back()->with('success', 'Dodano do polubionych!');
    }

    public function destroy(Product $product): RedirectResponse
    {
        Auth::user()->favorites()->detach($product->id);
        return back()->with('success', 'Usunięto z polubionych!');
    }
}
