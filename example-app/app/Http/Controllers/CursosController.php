<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursosController extends Controller

{


    public function index()
    {

        $cursos = Curso::orderBy('nome_do_curso','ASC')->get();
        

        return view('menu.home',['cursos'=>$cursos]);
    }


    public function cursos(){

        $cursos = Curso::orderBy('nome_do_curso','ASC')->get();

        return view('menu.cursos',['cursos'=>$cursos]);
    }


    public function frameworks(){

        return view('menu.frameworks');

    }

    public function sejaparceiro(){

        return view('menu.sejaparceiro');

    }

    public function entrar(){

        return view('menu.entrar');

    }

    public function cadastroCursos(){

        return view('menu.cadastroCursos');
    }

    public function store(Request $request)
    {
        $curso = $request->all();
        
        Curso::create($curso);

        return redirect('/')->with('msg', 'Cadastro realizado com Sucesso');
    }

  
    public function create()
    {
        
    }


    public function show($id){
        
        $curso = Curso::findOrFail($id);

        return view('cursos.show_cursos',['curso'=>$curso]);
    }


}
