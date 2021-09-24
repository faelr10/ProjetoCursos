<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oldenburg&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300&display=swap');
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>

    <div class="corpo">
        <div class="containers">


            <!--MENU-->
            @include('layout.menu')
            <!-------------------------------------------------------------------------------->

            <!--CORPO DO SITE-->
            @yield('content')
            <!-------------------------------------------------------------------------------->

            <!--FOOTER-->
            @include('layout.footer')
            <!-------------------------------------------------------------------------------->


        </div>
    </div>

</body>

</html>