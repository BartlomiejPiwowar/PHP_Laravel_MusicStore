<?php

namespace App\Http\Controllers;

use App\Models\Konkurs;
use App\Models\Zgloszenie;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Wyświetlanie listy użytkowników
    public function index()
    {
        $users = User::all(); // Pobierz wszystkich użytkowników
        return view('admin.index', compact('users'));
    }

    // Usuwanie użytkownika
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.index');
    }

    // Możesz dodać metody do edytowania użytkowników

    public function showForm()
    {
        $zgloszenia = Konkurs::all();  // Pobiera wszystkie zgłoszenia

        return view('zgloszenia', compact('zgloszenia'));
    }
}
