<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Area;
use App\Models\Custom;
use App\Models\Direccion;
use App\Models\Subdireccion;
use App\Models\Departamento;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $users= User::all();
        $bg = Custom::where('id_user', 3)->get()->last();
       return view('usuarios.index',compact('users', 'bg'));        
    }
    public function perfil(){
       $bg = Custom::where('id_user', 3)->get()->last();
       $log = User::where('id', Auth::user()->id)->first();
       if($log->area>=200){
        $area = Departamento::where('id', Auth::user()->area)->first();
       }else{
        $area = Subdireccion::where('id', Auth::user()->area)->first(); 
       }
       return view('usuarios.perfil',compact('log','area','bg'));     
    }
    public function create(){
       $bg = Custom::where('id_user', 3)->get()->last();
       if(Auth::user()->area>=200){
        $cat_dir = Departamento::where('iactivo',1)->pluck('nombre', 'id');
       }else{
        $cat_dir = Subdireccion::where('iactivo',1)->pluck('nombre', 'id');
       }
       return view('usuarios.create',compact('bg','cat_dir'));     
    }
    public function area(){
       $bg = Custom::where('id_user', 3)->get()->last();
       $cat_dir = Direccion::where('iactivo',1)->pluck('nombre', 'id'); 
       $cat_sub = Subdireccion::where('iactivo',1)->pluck('nombre', 'id'); 
       $cat_dep = Departamento::where('iactivo',1)->pluck('nombre', 'id'); 
       return view('usuarios.area',compact('bg','cat_dir','cat_sub','cat_dep'));     
    }
    public function update(Request $request, User $usuario){
        try{
        $usuario->sexo = $request->sexo;
        $usuario->email = $request->email;
        $usuario->telefono = $request->telefono;
        $usuario->update();

            return back()->with('ok', 'ok');

    }catch(\Exception $e){
            return back()->with('nook', $e->getMessage());
         }

    }

    public function update_area(Request $request, User $usuario){
        try{
        if($request->departamento == null || $request->departamento == 'N/A'){
            $usuario->area = $request->subdireccion;
        }else{
            $usuario->area = $request->departamento;
        }
        $usuario->update();

            return back()->with('ok', 'ok');

    }catch(\Exception $e){
            return back()->with('nook', $e->getMessage());
         }

    }
    public function inactivar(User $usuario){
        $per = new User();
        $per = User::where('username', $usuario->username)->first();
        $per->iactivo=0;
        $per->update();
        return redirect()->route('usuarios.index');

    }
    public function activar(User $usuario){
        $per = new User();
        $per = User::where('username', $usuario->username)->first();
        $per->iactivo=1;
        $per->update();
        return redirect()->route('usuarios.index');
    }
    public function custom(Request $request){
        $bg = Custom::where('id_user', 3)->get()->last();
        $bg->customcolor = $request->custom;
        $bg->custom = 'btn-'.$request->custom;
        $bg->custombackground = 'bg-gradient-'.$request->custom.' active';
        $bg->custommode = $request->custom2;
        $bg->custommenu = $request->custom3;
        $bg->customother = $request->custom4;
        
        $bg->update();
        return back();
    }
    public function show(User $usuario){
        $bg = Custom::where('id_user', 3)->get()->last();
        return view('usuarios.show');
    }
    public function store(Request $request, User $usuario){
        try{
        $usuario->nombre=$request->nombre;
        $usuario->apepa=$request->apepa;
        $usuario->apema=$request->apema;
        // $usuario->tipo_usuario=$request->tipo;
        $usuario->update();

        return back()->with('ok', 'ok');
    }catch(\Exception $e){
            return back()->with('nook', $e->getMessage());
         }
    }
}
