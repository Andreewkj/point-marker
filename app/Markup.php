<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class markup extends Model
{
    protected $fillable = ['user_id','currentDate','currentTime'];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
