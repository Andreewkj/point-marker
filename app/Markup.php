<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Markup extends Model
{
    protected $fillable = ['user_id','markupDay','markupTime'];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
