<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zgloszenie extends Model
{
    // Jeśli nazwa tabeli w bazie danych jest inna niż domyślna, np. 'zgloszenia'
    protected $table = 'zgloszenia';
}
