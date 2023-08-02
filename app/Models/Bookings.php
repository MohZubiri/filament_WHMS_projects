<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bookings extends Model
{
    use HasFactory;

    protected $fillable = ['client_id','event_id','venue_id','package_id','user_id','booking_date'];

    public function client(): BelongsTo
    {
        return $this->belongsTo(clients::class, 'client_id');
    }
    public function event(): BelongsTo
    {
        return $this->belongsTo(Events::class, 'event_id');
    }
    public function package(): BelongsTo
    {
        return $this->belongsTo(Packages::class, 'package_id');
    }
    public function venue(): BelongsTo
    {
        return $this->belongsTo(Venues::class, 'venue_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

      /**
     * Get all of the bookings for the bookings
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments(): HasMany
    {
        return $this->hasMany(Payments::class, 'payment_id', 'id');
    }
}
