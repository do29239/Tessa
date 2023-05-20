<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    public function products(): BelongsToMany
    {
        return $this->hasMany(Product::class)->withTimestamps();
    }
    public function item():HasMany
    {
        return $this->hasMany(Item::class);
    }

}
