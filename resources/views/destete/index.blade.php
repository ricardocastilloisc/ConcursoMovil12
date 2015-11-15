<!--visualizamos todo lo que necesitamos -->
@extends('template.template')
@section('content')
@include('alerts.success')
<!--Agregamos una ventan con los diferetes metodos de busqueda-->





@include('destete.forms.busqueda')






<div class="row">
  <div class="col-md-12">
    <h4 class="page-head-line">Animales</h4>
  </div>
</div>
<div class="destetes">
  <div class="row"> 

    <div class="col-md-6"> 
      <!--   Kitchen Sink -->
      <div class="panel panel-default">
        <div class="panel-heading"> <strong>Datos:</strong> </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>Arete:</th>
                  <th>Fecha:</th>
                  <th>Operaciones</th>
                </tr>
              </thead>
            
              <tbody>
              @foreach($destetes as $deteste)
                <tr>
                  <td>{{ $deteste->arete }}</td>
                  <td>{{ $deteste->fecha_de_destete }}</td>
                  <td> {!!link_to_route('destete.edit', $title='Editar', $parameters=$deteste->id, $attributes=['class'=>'btn btn-primary'])!!} </td>
                </tr>
              @endforeach
                </tbody>
              
            </table>
          </div>
        </div>
      </div>
      <!-- End  Kitchen Sink --> 
    </div> </div>
  {!!$destetes->render()!!} </div>
@endsection


@section('scripts')
    {!!Html::script('js/script4.js')!!}
@endsection 



