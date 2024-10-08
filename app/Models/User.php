<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use  HasFactory, Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'city',
        'phone',
        'postcode',
        'password',
        'request_submitted',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

	public function profile(): HasOne
	{
		return $this->hasOne(StylistProfile::class);
	}

    public function request(): HasOne
    {
        return $this->hasOne(RequestStylist::class, 'user_id');
    }

    public function coupons() :BelongsToMany
    {
        return $this->belongsToMany(Coupon::class)->withPivot('used_at');
    }

    public function cart() :HasMany
    {
        return $this->hasMany(Cart::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_user');
    }

    public function createdCodes() :HasMany
    {
        return $this->hasMany(StylistInvitationCode::class, 'created_by');
    }

    /**
     * Get all invitation codes used by the user to become a stylist.
     */
    public function usedCodes(): HasOne
    {
        return $this->hasOne(StylistInvitationCode::class, 'used_by');
    }

}
