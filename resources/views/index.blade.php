@extends('template.template')
<!-- vista principal de la pagina de usuaurio para poder acceder -->
@section('content')
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
@stop


