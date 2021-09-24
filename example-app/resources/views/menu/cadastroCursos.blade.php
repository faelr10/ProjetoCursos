@extends('layout.main')

@section('content')

<div class="cadastroform">

    <h1>Cadastrar novo curso</h1>

    <form method="POST" action="{{route('salvarCurso')}}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome do curso</label>
            <input type="text" class="form-control" name="nome_do_curso" id="nome_do_curso" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Tecnologia</label>
            <select name="linguagem_do_curso" id="linguagem_do_curso" class="form-select" aria-label="Default select example">
                <option value="1">HTML5</option>
                <option value="2">CSS3</option>
                <option value="3">JavaScript</option>
                <option value="4">ReactJs</option>
                <option value="5">Angular</option>
                <option value="6">NodeJS</option>
                <option value="7">PHP</option>
                <option value="8">Laravel</option>
                <option value="9">Git</option>
                <option value="10">Java</option>
            </select>

        </div>

        <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Nível do Curso</label>
            <select name="nivel_do_curso" id="nivel_do_curso" class="form-select" aria-label="Default select example">
                <option value="1">Básico</option>
                <option value="2">Intermediário</option>
                <option value="3">Avançado</option>
            </select>

        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
            <textarea name="desc_curso" id="linguagem_do_curso" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>

</div>


@endsection