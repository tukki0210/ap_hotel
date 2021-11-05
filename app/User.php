<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name','address','tel'];

    protected $primaryKey = 'user_id';
}
