<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{

    /*=============== ADMINISTRAÇÃO =============*/
    public function admin(){
        $users = User::all();
        $user = collect($users)->last();

        return view('admin.dashboard', compact('user'));
    }

    /*=============== FORMULARIO DE LOGIN =============*/
    public function login(){
        return view('auth.login');
    }

    /*=============== AUTHENTICAÇÃO DE USUÁRIO =============*/
    public function autenticar(Request $request){

        $this->validate($request, [
            'email'=> 'required',
            'password'=> 'required'
        ],[
            'email.required'=> 'Campo de email é obrigatório!',
            'password.required'=> 'Campo de senha é obrigatória!'
        ]);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect()->route('admin');
        }else{
            return redirect()->back()->with('danger', 'Email ou Senha invalidos!');
        }
    }

    /*=============== DESLOGAR =============*/
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
