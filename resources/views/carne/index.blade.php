<!--visualizamos todo lo que necesitamos -->

@extends('template.template')
@section('content')
@include('alerts.success') 
<!--Agregamos una ventan con los diferetes metodos de busqueda--> 
@include('carne.forms.busqueda')

<div class="row">
  <div class="col-md-12">
    <h4 class="page-head-line">Carnes:</h4>
  </div>
</div>
<div class="carnes">
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
                  <th>Fecha muerte:</th>
                  <th>Libras:</th>
                  <th>Operaciones</th>
                </tr>
              </thead>
              <tbody>
              
              @foreach($carnes as $carne)
              <tr>
                <td>{{ $carne->arete }}</td>
                <td>{{ $carne->fecha_de_muerte }}</td>
                <td>{{ $carne->libras_de_aprovechamiento }}</td>
                <td> {!!link_to_route('carne.edit', $title='Editar', $parameters=$carne->id, $attributes=['class'=>'btn btn-primary'])!!} </td>
              </tr>
              @endforeach
                </tbody>
              
            </table>
          </div>
        </div>
      </div>
      <!-- End  Kitchen Sink --> 
    </div>
  </div>
  {!!$carnes->render()!!} </div>
@endsection


@section('scripts')
    {!!Html::script('js/script5.js')!!}
@endsection 