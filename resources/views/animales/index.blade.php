@extends('template.template')

@section('content')
<div class="row">
  <div class="col-md-12">
    <h4 class="page-head-line">Menu</h4>
  </div>
</div>
<div class="row"> 
<a href="">
  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="dashboard-div-wrapper bk-clr-one"> <i  class="fa fa-book dashboard-div-icon" ></i>
      <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> </div>
      </div>
      <h5>Ver animales</h5>
    </div>
  </div>
  </a> 
  <a href="{!!URL::to('/animal/create')!!}">
  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="dashboard-div-wrapper bk-clr-two"> <i  class="fa fa-edit dashboard-div-icon" ></i>
      <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"> </div>
      </div>
      <h5>Registrar Animal</h5>
    </div>
  </div>
  </a> 
  <a href="">
  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="dashboard-div-wrapper bk-clr-three"> <i  class="fa fa-book dashboard-div-icon" ></i>
      <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> </div>
      </div>
      <h5>Ver razas</h5>
    </div>
  </div>
  </a>
  <a href="{!!URL::to('/raza/create')!!}">
  <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-four">
                        <i  class="fa fa-plus fa-fw dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
  </div>
                           
</div>
                         <h5>Agregar Raza</h5>
                    </div>
                </div>
    
  </a> 
</div>
@endsection
@stop