@extends('template.template')
<!-- vista principal de la pagina de usuaurio para poder acceder -->
@section('content')
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
        <label>Usuario: </label>
        <input type="text" class="form-control" />
        <label>Contraseña : </label>
        <input type="password" class="form-control" />
        <hr />
        <a href="index.html" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> &nbsp;Iniciar</a>&nbsp; </div>
    </div>
  </div>
</div>
@stop