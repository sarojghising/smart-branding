<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Influencer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'influencer';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile_no',
        'facebook_followers',
        'instagram_followers'

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
        'phone_verified_at' => 'datetime',
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
