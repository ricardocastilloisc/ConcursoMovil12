@extends('template.template')
@section('content')
@include('alerts.success')
<div class="row margin-bottom: 0px;">
  <div class="col-md-12">
    <h4 class="page-head-line">Razas</h4>
  </div>
</div>

<!--Esta parte es para poder poner los formularios de los filtros
en este biscaremos loo que necesitamos con un formularo
del estilo text hacemos una tabla para poder ubicarlos -->

<div class="row">
  <div class="col-md-12">
  <table align="left">
    <tr>
      <td> {!!Form::open(['route'=>'crecimiento.index','method'=>'GET', 'class'=>'navbar-form navbar-left','role'=>'search'])!!}
       <div class="form-group"> {!!Form::label('arete_madre','Selecciona el arete del animal:')!!}
       </td>
       </tr>
       <tr>
       <td> 
<!--Select con los parametros en este caso la de los animales que necesitamos-->
 {!!Form::select('animal_id',$crecimientos, null, array('class' => 'form-control'))!!} </div>
 
    
    
      <td><button type="submit" class="btn btn-default">Buscar</button>
        {!!Form::close()!!} </td>
    </tr>
  </table>
</div>
</div>
<br>

<!--terminamos la parte del formulario de la busqueda-->

<!--aqui es donde vamos a visualizar la busqueda-->

@if (isset($_GET['animal_id']))
<div class="crecimiento">
  <div class="row"> 
    <!--para poder acceder a la varable como un arreglo
    en este caso  el crecimiento que ha tenido--> 
          <div class="panel panel-default">
        <div class="panel-heading"> <strong>Datos del Arete: {{ $animal->arete }} </strong> </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <th>Fecha:</th>
                <th>Peso:</th>
                <th>Operación:</th>
              </thead>
    @foreach($crecimiento as $cre)

      <!--   Kitchen Sink -->

              <tbody>
                <tr>
                <td>{{$cre->fecha_de_registro}}</td>
                <td>{{$cre->peso_actual}}Kg</td>
                <td> {!!link_to_route('crecimiento.edit', $title='Editar', $parameters=$cre->id, $attributes=['class'=>'btn btn-primary'])!!} </td>
                </tr>
              </tbody>
                @endforeach

      <!-- End  Kitchen Sink --> 
              </table>
          </div>
        </div>
      </div>
   
   </div></div>
  @endif
@endsection