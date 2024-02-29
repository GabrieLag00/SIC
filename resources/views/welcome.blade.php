<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/index.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=K2D:wght@400&display=swap">
    <script src="https://kit.fontawesome.com/76c31da7a9.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3O+Xy+Xb7P+4lFyiepe5/5UapnooV7h4m7kxZI=" crossorigin="anonymous"></script>
    <title>@yield('titulo')</title>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-custom navbar-mainbg">
    <a class="navbar-brand navbar-logo" href="#">SIC</a>
    <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
            <li class="nav-item">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}"class="nav-link" href=""><i class="fas fa-tachometer-alt"></i>Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="nav-link">Log in</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="nav-link">Register</a>
                @endif
            @endauth
        @endif
            </li>
            <li class="nav-item active">
                <a class="nav-link" href=""><i class="far fa-address-book"></i>Reportes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><i class="far fa-clone"></i>Calificaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><i class="far fa-calendar-alt"></i>Calendario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><i class="far fa-chart-bar"></i>Concentrado</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><i class="far fa-copy"></i>Documentos</a>
            </li>
        </ul>
    </div>
</nav>
</header>

 

    <main>
        <div class="content-container">
            <div class="gradient"></div> <!-- El gradiente como un elemento independiente -->
            <div class="card">
                <p>Concentrado de calificaciones</p>
                <h2>SISTEMA INTEGRAL DE CALIFICACIONES</h2>
                <p>SIC: Eficiencia y precisión en la gestión de calificaciones. Simplificamos el seguimiento académico para estudiantes y educadores.Aplicacion Con el uso de laravel, para adiquirir conocimientos de php.</p>
            </div>
            <img src="{{ asset('assets/SICLOGO.PNG') }}" class="content-image">
        </div>
   
    </main>
    <footer>

      <div class="container__footer">
          <div class="box__footer">
              <div class="logo">
                  <img src="Images/logo-magtimus.png" alt="">
              </div>
              <div class="terms">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit cum cumque velit libero officiis quam doloremque reprehenderit quae corporis! Delectus architecto officia praesentium atque laudantium, nam deleniti sapiente deserunt.</p>
              </div>
          </div>
          <div class="box__footer">
              <h2>Soluciones</h2>
              <a href="https://www.google.com">App Desarrollo</a>
              <a href="#">App Marketing</a>
              <a href="#">IOS Desarrollo</a>
              <a href="#">Android Desarrollo</a>
          </div>

          <div class="box__footer">
              <h2>Compañia</h2>
              <a href="#">Acerca de</a>
              <a href="#">Trabajos</a>
              <a href="#">Procesos</a>
              <a href="#">Servicios</a>              
          </div>

          <div class="box__footer">
              <h2>Redes Sociales</h2>
              <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
              <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
              <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
              <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
          </div>

      </div>

      <div class="box__copyright">
          <hr>
          <p>Copyright © 2017. Universidad Tecnológica de Cancún</p>
      </div>
  </footer>
</body>
</html>