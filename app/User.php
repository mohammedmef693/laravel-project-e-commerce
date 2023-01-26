<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'email_verified_at', 'mobile', 'mobile_verified_at',
         'password', 'shipping_address', 'billing_adress',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function order() {
        return $this->hasMany(Order::class);
    }

    public function payments(){
        return $this->hasMany(pymment::class);
    }

    public function shippingAddresses(){
        return $this->hasOne('App\address', 'id', 'shipping_address');
    }
    public function billingAddress(){
        return $this->hasOne('App\address', 'id', 'billing_adress');
    }
    
    public function shipments(){
        return $this->hasMany(shipment::class);
    }
    public function wishlists(){
        return $this->haso(wishlist::class);
    }
    public function reviews(){
        return $this->hasMany(review::class);
}
public function roles(){
    return $this->belongsToMany(role::class);
}
}