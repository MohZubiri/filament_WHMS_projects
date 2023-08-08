<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HallService extends Model
{
    use HasFactory;

    protected $fillable=['service_name','price'];

    public function hall():BelongsTo{

        return $this->belongsTo(HallWedding::class,'hall_id');
    }
}
