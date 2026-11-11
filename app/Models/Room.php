<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = ['id'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function Type()
    {
        return $this->belongsTo(Type::class);
    }
}
