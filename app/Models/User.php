<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    const ADMIN_TYPE = 'admin';
    const OFFICER_TYPE = 'officer';
    const CUSTOMER_TYPE = 'customer';

    public function isAdmin()
    {
        return $this->role === self::ADMIN_TYPE;
    }

    public function isOfficer()
    {
        return $this->role === self::OFFICER_TYPE;
    } 
    public function isCustomer()
    {
        return $this->role === self::CUSTOMER_TYPE;
    } 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'usertype'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = false;
}
