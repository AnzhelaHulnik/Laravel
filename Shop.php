<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['id','img','name','city','address','email','telephone','URL'];

}
