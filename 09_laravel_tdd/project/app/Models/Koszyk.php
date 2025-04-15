<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Koszyk extends Model
{
    protected $table = 'koszyk';  // Ustawiamy nazwę tabeli na 'koszyk' zamiast automatycznime na koszyks

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
