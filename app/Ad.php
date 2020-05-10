<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    public function entreprises()
    {
        return $this->belongsTo('App\Entreprise');
    }
}
