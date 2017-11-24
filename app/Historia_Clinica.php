<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historia_Clinica extends Model
{
    protected $table = "historias_clinicas";
    protected $fillable = ['fecha_registrada'];

    public function user(){
      return $this.belongsTo('App\User');
    }
    public function tratamientos(){
      return $this.hasMany('App\Tratamiento');
    }

}
