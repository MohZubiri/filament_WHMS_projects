<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = ['amount','booking_id','payment_method','user_id'];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Bookings::class, 'payment_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
