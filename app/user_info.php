<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_info extends Model
{
    public function user(){
        $this->hasOne('App\User');
    }
}
