<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
        'password' => 'hashed',
    ];

    /**
     * Get all of the bookings for the bookings
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(Bookings::class, 'user_id', 'id');
    }

     /**
     * Get all of the clients for the clients
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clients(): HasMany
    {
        return $this->hasMany(clients::class, 'user_id', 'id');
    }

     /**
     * Get all of the events for the events
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events(): HasMany
    {
        return $this->hasMany(Events::class, 'user_id', 'id');
    }

      /**
     * Get all of the events for the events
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function packages(): HasMany
    {
        return $this->hasMany(Packages::class, 'user_id', 'id');
    }

      /**
     * Get all of the events for the events
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments(): HasMany
    {
        return $this->hasMany(Payments::class, 'user_id', 'id');
    }

      /**
     * Get all of the events for the events
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function venues(): HasMany
    {
        return $this->hasMany(Venues::class, 'user_id', 'id');
    }

}
