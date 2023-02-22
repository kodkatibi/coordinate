<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MoveHistory extends Model
{
    protected $fillable=[
        'device_id',
        'x_position',
        'y_position',
        'z_position',
    ];
    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
