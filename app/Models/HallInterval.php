<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HallInterval extends Model
{
    use HasFactory;

    protected $fillable=['first_price','price','start_time','end_time'];
    public function hall():BelongsTo{

        return $this->belongsTo(HallWedding::class,'hall_id');
    }
}
