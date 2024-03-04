<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/estilos.css')}}">
    <title>@yield('title') - WEB</title>
</head>
<body style="background-color: #afb2b4">
    <h1 class="text-3xl text-center py-3" style="color: #1e73be; font-weight:700;">Bienvenidos a la pagina de Registro</h1>
    <div class="for-registro">
    <form action="{{route('registro.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" name="nombre"  class="form-control" id="nombre" aria-describedby="emailHelp">
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Apellido</label>
          <input type="text"  name="apellido" class="form-control" id="apellido" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>
       
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
</body>
</html>

