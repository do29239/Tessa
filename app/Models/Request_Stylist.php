<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Request_Stylist extends Model
{
    use HasFactory;

    protected $fillable = [
        'saloon_name',
        'saloon_city',
        'saloon_address',
        'saloon_phone',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
