<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Entreprise extends Authenticatable
{
    use Notifiable;
    
    public function ads()
    {
        return $this->hasMany('App\Ad');
    }
}
