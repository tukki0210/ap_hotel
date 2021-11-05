<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $primaryKey = 'reserve_id';

    public function user()
    {
        return $this->belongsTo('App\User','user_id','user_id');
    }

    public function room()
    {
        return $this->belongsToMany('App\room','reserve_room','reserve_id','room_id')
                    ->withPivot('days','price');
    }

}
