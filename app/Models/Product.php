<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'brand_id',
        'category_id',
        'quantity',
        'price',
        'stylist_price',
    ];
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Order::class)->withTimestamps();
    }
    public function items()
    {
        return $this->hasMany(Item::class);
    }
    public function image():MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }
    public function sale()
    {
        return $this->hasOne(Sale::class);
    }
}
