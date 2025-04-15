<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class RegulaminController extends Controller
{
    public function index(): View
    {
        return view('regulamin');  // Zwracamy widok o nazwie 'regulamin'
    }
}
