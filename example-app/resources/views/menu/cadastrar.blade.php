@extends('layout.main')

@section('content')

<div class="cadastroform">

<h1>Cadastrar</h1>

    <form method="POST" action="{{route('registrar')}}" >
    @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome de usuário</label>
            <input type="text" class="form-control" name="login" id="login" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>

</div>


@endsection