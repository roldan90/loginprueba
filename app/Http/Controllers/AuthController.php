<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function __construct(){
        $this->middleware(["guest"])->only(["index"]);
       
    }

    public function index() {
        return view( 'welcome');
    }

    public function logear(Request $request) {
        $credenciales = $request->only("user", "password");
        
        if (Auth::attempt($credenciales)) {
            return redirect()->route("inicio");
        } 
        return back()->withInput($credenciales);
    }

    public function logout() {
        Auth::logout();
        Session::flush();
        return redirect()->route("login");
    }

    public function crearNuevoUsuario() {
        $idPersona = 206;
        $idOrg = 1;
        $item = new User();
        $item->id_persona = $idPersona;
        $item->email = $idPersona;
        $item->id_organizacion = $idOrg;
        $item->pass = Hash::make($idPersona);
        $item->save();
        return $item;
    }
}
