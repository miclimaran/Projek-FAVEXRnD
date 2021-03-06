<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function food(){
        return $this->hasMany('App\Food');
    }

    protected $fillable = ['nama', 'gambar'];
}
