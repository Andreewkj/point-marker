<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Markup extends Model
{
    protected $fillable = ['user_id','markup'];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
