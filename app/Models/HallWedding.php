<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HallWedding extends Model
{
    use HasFactory;

    protected $fillable = ['name','address','latit','user_id','longit','phone','city_id','capacity','contact_number','main_image','alt_image'];
    public function city():BelongsTo{

        return $this->belongsTo(City::class,'city_id');
    }

    protected $casts=[
        'alt_image'=> 'array'
    ];
    public function hallService():HasMany{

        return $this->HasMany(HallService::class,'Hall_id');
    }

    public function hallInterval():HasMany{

        return $this->HasMany(HallInterval::class,'hall_id');
    }
}
