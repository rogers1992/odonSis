<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    public $timestamps = true;

    protected $fillable = ['name',
                           'display_name',
                           'description',
                           'created_at',
                           'updated_at'];

    protected function users(){
      return $this->belongsToMany('App\User');
    }
    protected function buscarRol($rol){
      return DB::select('SELECT id, display_name
                         FROM roles
                         WHERE display_name = "'.$rol.'"');
    }
}
