<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />
<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
<title>Control Ganadero</title>
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
<!-- FONT AWESOME ICONS  -->
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
<!-- CUSTOM STYLE  -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
<!--La seccion  de lo temos aperye de lo que no estan en el tema pricipl con 
la finalidad de no saturar de tantos temas la vista principal-->

@section('css')

     @show

<!-- BOOTSTRAP CORE STYLE  -->
</head>
<body>

<!-- HEADER END-->
<header> </header>
<!-- /header -->
<div class="navbar navbar-inverse set-radius-zero">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="{{ route('home') }}"> <img src="{{ asset('img/logo.png') }}" /> </a> </div>
  </div>
</div>
<hr>

<!-- LOGO HEADER END-->

<section class="menu-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="navbar-collapse collapse ">
          <ul id="menu-top" class="nav navbar-nav navbar-right">
            <li><a href="{!!URL::to('/animal/show')!!}">Animales</a></li>
            <li><a href="{!!URL::to('/nacimiento/show')!!}">Nacimientos</a></li>
            <li><a href="forms.html">Periodos de crecimiento</a></li>
            <li><a href="login.html">Destete</a></li>
            <li><a href="login.html">Aprovechamiento de Carne</a></li>
            <li><a href="login.html">Email: Usuario</a></li>
          </ul>
          </li>
          </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MENU SECTION END-->
<div class="content-wrapper">
  <div class="container"> <!--esta seccion podemos poner lo que necesitamos en el contenido y poder reciclar lo que necesitamos -->@yield('content') </div>
</div>
<!-- CONTENT-WRAPPER SECTION END-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12"> &copy; Castillo Olivera Ricardo Orlando</div>
      <div class="col-md-12"> &copy; Novelo Sansores Alan Ernesto</div>
    </div>
  </div>
</footer>
<!-- FOOTER SECTION END--> 
<!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  --> 
<!-- CORE JQUERY SCRIPTS --> 
<script src="{{ asset('js/jquery-1.11.1.js') }}"></script> 
<!-- BOOTSTRAP SCRIPTS  --> 
<script src="{{ asset('js/bootstrap.js') }}"></script> 
<!--los js que no temos y podemos accesar 
el cuales no saturen al tema principal-->
@section('scripts')
     @show
</body>
</html>
