<!--visualizamos todo lo que necesitamos -->
@extends('template.template')
@section('content')
@include('alerts.success')
<!--Agregamos una ventan con los diferetes metodos de busqueda-->
@include('animales.forms.busqueda')
<div class="row">
  <div class="col-md-12">
    <h4 class="page-head-line">Animales</h4>
  </div>
</div>
<div class="animales">
  <div class="row"> @foreach($animales as $animal)
    <div class="col-md-6"> 
      <!--   Kitchen Sink -->
      <div class="panel panel-default">
        <div class="panel-heading"> <strong>Datos:</strong> </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
              <tbody>
                <tr>
                  <th>Nombre:</th>
                </tr>
                <tr>
                <!--sin tener que explicar mucho solo 
                accedemos a los valores de la variable-->
                  <td>{{$animal->nombre}}</td>
                </tr>
                <tr>
                  <th>Arete:</th>
                </tr>
                <tr>
                  <td>{{$animal->arete}}</td>
                </tr>
                <tr>
                  <th>Animal:</th>
                </tr>
                <tr>
                  <td>{{$animal->raza}}</td>
                </tr>
                <tr>
                  <th>Fecha de Compra:</th>
                </tr>
                <tr>
                  <td>{{$animal->fecha_de_compra}}</td>
                </tr>
                <tr>
                  <th>Fecha de Nacimiento:</th>
                </tr>
                <tr>
                  <td>{{$animal->fecha_de_nacimiento}}</td>
                </tr>
                <tr>
                  <th>Peso:</th>
                </tr>
                <tr>
                  <td>{{$animal->peso}}</td>
                </tr>
                <tr>
                  <th>Sexo:</th>
                </tr>
                <tr>
                  <td>{{$animal->sexo}}</td>
                </tr>
                <tr>
                  <td> {!!link_to_route('animal.edit', $title='Editar', $parameters=$animal->id, $attributes=['class'=>'btn btn-primary'])!!} </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- End  Kitchen Sink --> 
    </div>
    @endforeach </div>
  {!!$animales->render()!!} </div>
@endsection


@section('scripts')
    {!!Html::script('js/script2.js')!!}
@endsection 