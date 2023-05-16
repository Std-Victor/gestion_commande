<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'quantity', 'selling_price', 'purchase_price'];

    public function commande(): BelongsToMany
    {
        return $this->belongsToMany(Commande::class);
    }
}
