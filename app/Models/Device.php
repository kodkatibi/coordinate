<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function histories()
    {
        return $this->hasMany(MoveHistory::class);
    }
}
