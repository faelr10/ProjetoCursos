<nav class="menu">

    <div class="navesquerda">
        <div class="logomenu">
            <img src="img/logo.png" alt="" srcset="">
        </div>
    </div>

    <div class="navmeio">



        <div class="topicosesquerda">

            <div class="itenstopicosesquerda">
                <a href="{{url::asset('')}}">Home</a>
            </div>

            <div class="itenstopicosesquerda">
                <a href="{{url::asset('cursos')}}">Cursos</a>

                <div class="submenu">
                    <a href="">HTML</a>
                    <a href="">CSS</a>
                    <a href="">JavaScript</a>
                    <a href="">PHP</a>
                    <a href="">Banco de dados</a>
                    <a href="">Git & GitHub</a>
                    <a href="">Java</a>
                    <a href="">Python</a>
                </div>

            </div>

            <div class="itenstopicosesquerda">
                <a href="{{url::asset('frameworks')}}">Framework</a>
            </div>

            <div class="itenstopicosesquerda">
                <a href="{{url::asset('sejaparceiro')}}">Seja parceiro</a>
            </div>


        </div>

    </div>

    <div class="navdireita">
        @guest
        <div class="itenstopicosdireita">
            <a href="{{route('login')}}">Entrar</a>
        </div>
        <div class="itenstopicosdireita">
            <a href="{{route ('cadastrar')}}">Cadastrar</a>
        </div>
        @endguest

        @auth

        <div class="menuperfilprincipal">


            <a href="">
                <ion-icon id="iconperfil" name="person-circle-outline"></ion-icon>
            </a>

            <div class="submenuperfilprincipal">
                <a href="">Meu Perfil</a>
                <a href="{{route('cadastroCursos')}}">Criar Curso</a>
                <a href="{{route('logout')}}">Sair</a>

            </div>


        </div>

        @endauth

    </div>



</nav>