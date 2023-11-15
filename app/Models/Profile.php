<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'address',
        'city',
        'phone',
        'discount',
        'postcode',
    ];
    use HasFactory;
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
