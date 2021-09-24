@extends('layout.main')


@section('content')

<div class="cursos">
    <!-------------------------------------------------------------------------------->
    <!--MENU LATERAL-->
    <div class="menulateralcursos">

        <div class="listalateralcursos">

            <div class="listalateralcursostitulo">
                <h2>Tecnologias</h2>
            </div>

            <div class="listalateralcursosbloco">

                <div class="listalateralcursosblocologo">
                    <img src="img/logos/html.png" alt="" srcset="">
                </div>

                <div class="listalateralcursosbloconome">
                    <p>HTML5</p>
                </div>

            </div>

            <div class="listalateralcursosbloco">

                <div class="listalateralcursosblocologo">
                    <img src="img/logos/css.png" alt="" srcset="">
                </div>

                <div class="listalateralcursosbloconome">
                    <p>CSS3</p>
                </div>

            </div>

            <div class="listalateralcursosbloco">

                <div class="listalateralcursosblocologo">
                    <img src="img/logos/js.png" alt="" srcset="">
                </div>

                <div class="listalateralcursosbloconome">
                    <p>JavaScript</p>
                </div>

            </div>

            <div class="listalateralcursosbloco">

                <div class="listalateralcursosblocologo">
                    <img src="img/logos/logoreactpng.png" alt="" srcset="">
                </div>

                <div class="listalateralcursosbloconome">
                    <p>ReactJs</p>
                </div>

            </div>

            <div class="listalateralcursosbloco">

                <div class="listalateralcursosblocologo">
                    <img src="img/logos/angular.png" alt="" srcset="">
                </div>

                <div class="listalateralcursosbloconome">
                    <p>Angular</p>
                </div>

            </div>

            <div class="listalateralcursosbloco">

                <div class="listalateralcursosblocologo">
                    <img src="img/logos/nodejs.png" alt="" srcset="">
                </div>

                <div class="listalateralcursosbloconome">
                    <p>NodeJS</p>
                </div>

            </div>

            <div class="listalateralcursosbloco">

                <div class="listalateralcursosblocologo">
                    <img src="img/logos/php.png" alt="" srcset="">
                </div>

                <div class="listalateralcursosbloconome">
                    <p>PHP</p>
                </div>

            </div>

            <div class="listalateralcursosbloco">

                <div class="listalateralcursosblocologo">
                    <img src="img/logos/laravel.png" alt="" srcset="">
                </div>

                <div class="listalateralcursosbloconome">
                    <p>Laravel</p>
                </div>

            </div>

            <div class="listalateralcursosbloco">

                <div class="listalateralcursosblocologo">
                    <img src="img/logos/git.png" alt="" srcset="">
                </div>

                <div class="listalateralcursosbloconome">
                    <p>Git</p>
                </div>

            </div>

            <div class="listalateralcursosbloco">

                <div class="listalateralcursosblocologo">
                    <img src="img/logos/java.png" alt="" srcset="">
                </div>

                <div class="listalateralcursosbloconome">
                    <p>Java</p>
                </div>

            </div>






        </div>

    </div>
    <!-------------------------------------------------------------------------------->
    <!--LISTA DE CURSOS-->
    <div class="listascursos">

        <div class="listascursostitulo">
            <h1>Cursos</h1>
        </div>
        <div class="containerdecursos">


        @foreach($cursos as $cursos)
        <div class="cardcurso">
            <div class="imgbx">

            @php
            $tecnologia = $cursos->linguagem_do_curso;
            @endphp

            @if($tecnologia == 1)
            <img src="img/logos/html.png" alt="" srcset="">
            @elseif($tecnologia == 2)
            <img src="img/logos/css.png" alt="" srcset="">
            @elseif($tecnologia == 3)
            <img src="img/logos/js.png" alt="" srcset="">
            @elseif($tecnologia == 4)
            <img src="img/logoreactpng.png" alt="" srcset="">
            @elseif($tecnologia == 5)
            <img src="img/logos/angular.png" alt="" srcset="">
            @elseif($tecnologia == 6)
            <img src="img/logos/nodejs.png" alt="" srcset="">
            @elseif($tecnologia == 7)
            <img src="img/logos/php.png" alt="" srcset="">
            @elseif($tecnologia == 8)
            <img src="img/logos/laravel.png" alt="" srcset="">
            @elseif($tecnologia == 9)
            <img src="img/logos/git.png" alt="" srcset="">
            @elseif($tecnologia == 10)
            <img src="img/logos/java.png" alt="" srcset="">
            @endif

            </div>
            
            <div class="contentBx">
                <h1>{{$cursos->nome_do_curso}}</h1>

                @if($cursos->nivel_do_curso == 1)
                <h2 class="price">Básico</h2>

                @elseif($cursos->nivel_do_curso == 2)
                <h2 class="price">Intermediário</h2>

                @elseif($cursos->nivel_do_curso == 3)
                <h2 class="price">Avançado</h2>

                @endif     

                
                <a href="" class="buy">Acessar</a>
            </div>
        </div>
        @endforeach
        




        </div>

    </div>

</div>

@endsection