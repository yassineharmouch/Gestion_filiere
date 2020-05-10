<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Etudiant extends Authenticatable
{

    use Notifiable;

   

    public function cvs(){
        return $this->hasMany('App\cv');
    }
}

