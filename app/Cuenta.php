<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $table = "cuentas";
    protected $fillable = ['id'];

    public function tratamiento(){
      return $this.belongsTo('App\Tratamiento');
    }
}
