<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;


    /**
     * Get all of the hallwedding for the City
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hallwedding(): HasMany
    {
        return $this->hasMany(HallWedding::class, 'city_id');
    }
}
