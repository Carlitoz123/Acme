<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plano;
use Illuminate\Support\Facades\Hash;

class PlanosController extends Controller
{
     public function getPlanos(){
        /** Select * from planos */
        $data= Plano::all();
        //dd($data);
        return view("admin.planos")
        ->with('planos',$data);
    }

    public function createPlanos(Request $request){
       // dd($request->email);
       //reglas de validacion
       $request->validate([
        "name"=>'required|min:3',
        "plano"=>"required|min:3",
        "fecha_s"=>"required",
        "fecha_a"=>'required',
        "version"=>'required|min:1'
       ]);
       //guardar registro insert into planos.......
       $user = new Plano();
       $user->name_plano=$request->name;
       $user->archivo_pdf=$request->plano;
       $user->fecha_subida=$request->fecha_s;
       $user->fecha_actualizacion=$request->fecha_a;
       $user->version=$request->version;
       $user->save();
       return redirect()
            ->back()
            ->with('success',"Plano insertado correctamente");
    }
}
