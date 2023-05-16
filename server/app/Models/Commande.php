<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['client_id', 'date'];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    public function detailCommande(): HasOne
    {
        return $this->hasOne(DetailCommande::class);
    }
    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
