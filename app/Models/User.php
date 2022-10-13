<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $table = 'users';
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'active',
        'gender',
        'birthday',
        'location',
        'bio'
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

    // user has one checkin

    public function checkin()
    {
        return $this->hasOne(Checkin::class);
    }
    // user has many checkins
    public function checkins()
    {
        return $this->hasMany(Checkin::class);

    }


   //=======================
    // user has one place
    /*
        public function place()
        {
            return $this->hasOne(Place::class);
        }
        // user has many places
        public function places()
        {
            return $this->hasMany('Place');

        }
    */



    public function getAuthIdentifier()
    {
        return $this->getKey();
    }
    public function getAuthPassword()
    {
        return $this->password;
    }
    public function getReminderEmail()
    {
        return $this->email;
    }
    public function getRememberTokenName()
    {
        return 'remember_token';
    }
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }
    public function getRememberToken()
    {
        return $this->remember_token;
    }
}
