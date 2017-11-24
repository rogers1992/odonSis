<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $table = "tratamientos";
    protected $fillable = ['id'];

    public function historiaClinica(){
      return $this.belongsTo('App\Historia_Clinica');
    }
    public function diente(){
      return $this.belongsTo('App\Diente');
    }
    public function cuentas(){
      return $this.hasMany('App\Cuenta');
    }
