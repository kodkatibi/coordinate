<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MoveHistory extends Model
{
    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
