<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Role_User;
use App\Seguridad;

class DoctorController extends Controller
{
    public function index(){

    	return view('doctores.listar');
    }
    public function create(){
    	return view('doctores.create');
    }
    public function store(Request $req){
    	if(!empty($req->fotoPerfil)){
        $data_image = $req->fotoPerfil;
        $data_binary = base64_decode($data_image);
        //poniendole nombre la Imagen
        $foto_usuario = uniqid()."_".$req->name.".jpeg";
        \Storage::disk('local')->put($foto_usuario, $data_binary);
      }
      $usuario = new User();
      $usuario->name = $req->name;
      $usuario->last_name = $req->last_name;
      $usuario->address = $req->address;
      $usuario->age = $req->age;
      $usuario->birthday = "2014-02-21";
      $usuario->telephone = $req->telephone;
      $usuario->path = "storage/img/perfiles/".$foto_usuario;
      if($req->genero == "hombre"){
        $usuario->genero = 0;
      }
      else
        $usuario->genero = 1;
      $usuario->save();
    	$rol_sel = Role::buscarRol($req->rol);
    	$usuario->roles()->attach($rol_sel[0]->id);
      /*ingresa password en la tabla seguridad  que tiene relacion 1 a  1 con la tabla users*/
      $last_user = User::all()->last()->id;
      $user_encontrado = User::find('id');
      $seguridad = new Seguridad();
      $seguridad->password = $req->password;
      $seguridad->user_id = $last_user;
      $seguridad->save();
      //$user_encontrado->seguridad()->save($seguridad);
      


    	return view('doctores.show')->with('usuario', $usuario);
    }
}
