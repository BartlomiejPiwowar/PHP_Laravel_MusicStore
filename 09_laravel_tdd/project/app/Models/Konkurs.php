<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konkurs extends Model
{
    use HasFactory;

    protected $table = 'konkurs';

    protected $fillable = [
        'name',
        'email',
        'answer',
        //'images',
    ];

    protected $casts = [
        //'images' => 'array', // Konwertuje na tablicę podczas odczytu
    ];
}
