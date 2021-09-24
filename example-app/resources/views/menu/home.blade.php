@extends('layout.main')

@section('content')

<div class="listahorizontalmenu">


    <div class="listahorizontalmenulinks">
        <a href="http://"><img src="img/logos/html.png" alt="" srcset=""></a>
    </div>

    <div class="listahorizontalmenulinks">
        <a href="http://"><img src="img/logos/css.png" alt="" srcset=""></a>
    </div>

    <div class="listahorizontalmenulinks">
        <a href="http://"><img src="img/logos/js.png" alt="" srcset=""></a>
    </div>

    <div class="listahorizontalmenulinks">
        <a href="http://"><img src="img/logos/php.png" alt="" srcset=""></a>
    </div>

    <div class="listahorizontalmenulinks">
        <a href="http://"><img src="img/logoreactpng.png" alt="" srcset=""></a>
    </div>

    <div class="listahorizontalmenulinks">
        <a href="http://"><img src="img/logos/java.png" alt="" srcset=""></a>
    </div>

    <div class="listahorizontalmenulinks">
        <a href="http://"><img src="img/logos/git.png" alt="" srcset=""></a>
    </div>

    <div class="listahorizontalmenulinks">
        <a href="http://"><img src="img/logos/angular.png" alt="" srcset=""></a>
    </div>

    <div class="listahorizontalmenulinks">
        <a href="http://"><img src="img/logos/laravel.png" alt="" srcset=""></a>
    </div>

    <div class="listahorizontalmenulinks">
        <a href="http://"><img src="img/logos/nodejs.png" alt="" srcset=""></a>
    </div>

</div>

@if(session('msg'))
<div class="msg">{{ session('msg') }}</div>
@endif

<div id="search-container">

    <h1>Procure por um curso</h1>

    <form action="/" method="get">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>

</div>

<div class="carroselrecemadicionados">

</div>

@endsection