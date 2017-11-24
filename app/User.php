<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class User extends Model
{
    protected $table = 'users';


    protected $fillable = ['name',
                           'last_name',
                           'address',
                           'age',
                           'birthday',
                           'telephone',
                           'genero',
                           'created_at',
                           'updated_at'];

    public function roles(){
      return $this->belongsToMany('App\Role');
    }
    public function historiaClinica(){
      return $this.hasOne('App\Historia_Clinica');
    }
    public function buscarUsuario($buscado){
      return DB::select('SELECT id
                         FROM users
                         WHERE name="'.$buscado.'"');
    }
    /*metodo para obtener password del usuario segun el tipo*/
    public function seguridad(){
      return $this->hasOne('App\Seguridad');
    }
}
