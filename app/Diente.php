<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diente extends Model
{
    protected $table = "dientes";
    protected $fillable = ['id'];

    public function tratamientos(){
      return $this.hasMany('App\Tratamiento');
    }
}
