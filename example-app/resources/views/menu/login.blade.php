@extends('layout.main')

@section('content')

<div class="loginform">

    <h1>Entrar</h1>

    <form method="POST" action="{{route('logar')}}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome de usuário</label>
            <input type="text" class="form-control" name="login" id="login" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha">
        </div>

        <button type="submit" class="btn btn-primary">Entrar</button>

    </form>

</div>

@endsection