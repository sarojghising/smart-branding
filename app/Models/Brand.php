<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Brand extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'brand';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand_name',
        'first_name',
        'last_name',
        'website',
        'country',
        'mobile_no',
        'email',
        'password',
        'is_email_verified',
        'remember_token',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',

    ];

     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_email_verified' => 'boolean'

    ];


    /**
     * getInfluencerCredentialsDetails
     *
     * @param  mixed $credentials
     * @return void
     */
    public function getInfluencerCredentialsDetails($credentials)
    {
        $details = [
            'email' => $credentials->email,
            'password' => $credentials->password
        ];


        if (!is_null($details)) return $details;

        return null;
    }
}
