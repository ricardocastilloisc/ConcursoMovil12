@extends('template.template')
@section('content') 
<!--menu principal-->
<div class="row">
  <div class="col-md-12">
    <h4 class="page-head-line">Menu</h4>
  </div>
</div>
<!--para poder diregirte de una pagina a otra
sin mucho desperdicio de codigo 
laravel ofrece la manera de poder acceder con url-->
<div class="row"> <a href="{!!URL::to('/destete')!!}">
  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="dashboard-div-wrapper bk-clr-one"> <i  class="fa fa-book dashboard-div-icon" ></i>
      <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> </div>
      </div>
      <h5>Ver Destetes</h5>
    </div>
  </div>
  </a> <a href="{!!URL::to('/destete/create')!!}">
  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="dashboard-div-wrapper bk-clr-two"> <i  class="fa fa-edit dashboard-div-icon" ></i>
      <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"> </div>
      </div>
      <h5>Registrar Destete</h5>
    </div>
  </div>
  </a> </div>
@endsection
@stop