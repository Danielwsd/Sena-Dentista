<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css')}}">
    <title>@yield('title') - WEB</title>
</head>
<body>

    <header>
        <h1>SENA SONRIÉ</h1>
        <img src="https://pymesworld.com/wp-content/uploads/2019/03/diseno-web-clinicas-dentales.jpg" alt="" class="index">

    </header>

    <div style="display:flex; justify-content:center; aling-items:center;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-3">   
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                @if(auth()->check())
                <li>
                    <p>Welcome <b>{{ auth()->user()->name}}</b></p>
                </li>

                @else

                <a class="nav-link active px-2" aria-current="page" href="{{route('registro.create')}}"><b>Registro</b></a>
                <a class="nav-link active px-2" aria-current="page" href="{{route('login.create')}}"><b>Login</b></a>

                @endif
                <a class="nav-link active px-2" aria-current="page" href="{{route('login.destroy')}}"><b>Salir</b></a>
                <a class="nav-link active px-2" href="{{route('tratamientos')}}"><b>Tratamientos</b></a>
                
            </div>
          </div>
        </div>
      </nav>
    </div>

      @yield('content')

      <footer class="footer">
        <div class="contenedor">
            <div class="footer-row">
                <div class="footer-links">
                    <h4>Compañia</h4>
                    <ul>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Politicas de seguridad</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Nuestras sede</h4>
                    <ul>
                        <li><a href="#">Cl. 4 #2-80, Centro, Popayán, Cauca</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Contactos</h4>
                    <ul>
                        <li><a href="#">Correo: sena@gmail.com</a></li>
                        <li><a href="#">Telefono: 5678905</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Siguenos</h4>
                    <div class="social-link">
                        <a href="https://twitter.com/?lang=es"><i class="bi bi-twitter-x"></i></a>
                        <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.facebook.com/?locale=es_LA"><i class="bi bi-facebook"></i></i></a>
                        <a href="https://web.whatsapp.com/"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>