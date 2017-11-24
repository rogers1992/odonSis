<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Role_User;

use App\Http\Requests;

class PacienteController extends Controller
{
    public function index(){
      $users = User::all();
      return view('pacientes.index')->with('users', $users);
    }
    public function create(){
      return view('pacientes.create');
    }
    public function show($id){
      $user = User::find($id);

      return view('pacientes.show')->with('user', $user);
    }
    public function store(Request $req){
      //dd($req->all());
      if(!empty($req->fotoPerfil)){
        $data_image = $req->fotoPerfil;
        $data_binary = base64_decode($data_image);
        //poniendole nombre la Imagen
        $foto_usuario = uniqid()."_".$req->name.".jpeg";
        \Storage::disk('local')->put($foto_usuario, $data_binary);

      }
      else{
        $foto_usuario = "no tiene foto";
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
      //devuelve el rol correspondiente
      $rol_sel = Role::buscarRol($req->rol);
      //$usuario->roles()->attach($rol_sel[0]->id);
      //dd($rol_sel);


      //pendiente esta el tema de los roles para un paciente que es cliente


      return route('pacientes.show', $usuario->id);

      //dd($usuario);
    }
}
