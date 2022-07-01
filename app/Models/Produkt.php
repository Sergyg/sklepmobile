<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produkt extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'pricesale',
        'description',
        'compatibility',
        'image_path',
        'category_id'
];
    public function category(): BelongsTo
    {
        return $this->belongsTo(ProduktCategory::class);
    }

}
