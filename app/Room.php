<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $primaryKey = 'room_id';

    public function roomType()
    {
        return $this->belongsTo('App\RoomType','room_type_id','room_type_id');
    }
}
