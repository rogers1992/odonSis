<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguridad extends Model
{
    protected $table = 'certainty';
    protected $fillable = ['id',
    						'password',
    						'id_user'
    						];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
