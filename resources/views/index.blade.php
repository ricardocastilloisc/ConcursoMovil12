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
      <a class="navbar-brand" > <img src="{{ asset('img/logo.png') }}" /> </a> </div>
  </div>
</div>
<hr>

<!-- LOGO HEADER END-->


<!-- MENU SECTION END-->
<div class="content-wrapper">
  <div class="container"> 


@include('alerts.errors')
@include('alerts.request')
<div class="content-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4 class="page-head-line">POR favor iniciar sesión</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6"> <strong>
        <h4>Iniciar sesión:</strong></h4>
        <br />

            {!!Form::open(['route'=>'log.store', 'method'=>'POST','class'=>'login-form'])!!}
      <div class="form-group">
        {!!Form::label('correo','Correo:', ['class'=>'sr-only'])!!}
        {!!Form::text('name',null,['placeholder'=>'Ingrese usuario...', 'class'=>'form-username form-control', 'id' => 'form-username'])!!}
      </div>
      <div class="form-group">
        {!!Form::label('contrasena','Contraseña:', ['class'=>'sr-only'])!!}
        {!!Form::password('password',['placeholder'=>'Contraseña...', 'class'=>'form-password form-control', 'id' => 'form-password'])!!}
      </div>
      {!!Form::submit('Iniciar Sesión',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
        
      </div>
    </div>
  </div>
</div>






   </div>
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

</body>
</html>