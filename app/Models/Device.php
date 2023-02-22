<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = ['name'];

    public function histories()
    {
        return $this->hasMany(MoveHistory::class);
    }

    public function latestCoordinate()
    {
        return $this->hasOne(MoveHistory::class)->latest();
    }
}
