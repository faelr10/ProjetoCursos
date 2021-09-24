<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function cadastrar(){
        return view('menu.cadastrar');
    }

    public function store(Request $request){

        $usuario = $request->all();
        $usuario['senha'] = bcrypt($usuario['senha']);
        
        Usuario::create($usuario);

        return redirect('/')->with('msg', 'Cadastro realizado com Sucesso');

    }

    public function login(){
        return view('menu.login');   
    }

    public function auth(Request $request){

        $dados = $request->all();

        $login = $dados['login'];
        $senha = $dados['senha'];

        $usuario = Usuario::where('login', $login)->first();

        if(Auth::check() || ($usuario && Hash::check($senha, $usuario->senha))){
            Auth::login($usuario);
            return redirect(route('welcome'));
        } else {
            return redirect(route('login'));
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('welcome'));
    }

}
