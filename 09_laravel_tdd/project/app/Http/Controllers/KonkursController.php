<?php

namespace App\Http\Controllers;

use App\Models\Konkurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class KonkursController extends Controller
{
    // Wyświetlenie formularza konkursowego
    public function showForm()
    {
        if (session('form_submitted')) {
            // Wyświetl widok z podziękowaniem
            return view('konkurs')->with('form_submitted', true);
        }
        return view('konkurs');
    }

    // Przesyłanie zgłoszenia konkursowego
    public function store(Request $request)
    {
        // Walidacja danych
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'answer' => 'required|string',
           // 'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        /* // Przetwarzanie zdjęć
         $images = [];
         if ($request->hasFile('images')) {
             foreach ($request->file('images') as $image) {
                 // Sprawdzenie czy plik jest poprawnym obrazem
                 if ($image->isValid() && in_array($image->extension(), ['jpg', 'jpeg', 'png'])) {
                     // Zapisanie pliku w katalogu "public/images"
                     $path = $image->store('images', 'public'); // Zapis do katalogu "public/images"
                     $images[] = $path; // Zapis ścieżki do tablicy
                 }
             }
         }
         $validated['images'] = json_encode($images);*/

        // Zapis do bazy danych
        $konkurs = Konkurs::create($validated);


        // Przekierowanie z komunikatem
        return view('konkurs')->with('form_submitted', true);
    }


    // Wyświetlenie zgłoszeń (dla administratorów)
    public function index()
    {
        $konkurs = Konkurs::all();

        foreach ($konkurs as $zgloszenie) {
            /*if ($zgloszenie->images) {
                $images = json_decode($zgloszenie->images, true);
                $existingImages = [];

                foreach ($images as $image) {
                    if (File::exists(public_path($image))) {
                        $existingImages[] = $image;
                    }
                }

                // Aktualizuj listę zdjęć tylko o istniejące pliki
               // $zgloszenie->images = json_encode($existingImages);
            }*/
        }
        return view('zgloszenia', compact('konkurs'));
    }
}
