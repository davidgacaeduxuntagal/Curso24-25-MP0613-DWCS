<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- css para usar Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>@yield('titulo')</title>
</head>
<body style="background:#0277bd">
<div class="float float-right d-inline-flex mt-2">
    <i class="fas fa-user mr-3 fa-2x"></i>
    <input type="text" size='10px' value='{{$usuario}}' class="form-control mr-2 bg-transparent text-white" disabled>
    <a href='cerrar.php' class='btn btn-danger mr-2'>Salir</a>
</div>
<br><br>
<div class="container mt-3">
    <h3 class="text-center mt-3 mb-3">@yield('encabezado')</h3>
    @yield('contenido')
</div>

</body>
</html>
