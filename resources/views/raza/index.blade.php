@extends('template.template')
@section('content')
@include('alerts.success')
<div class="row">
  <div class="col-md-12">
    <h4 class="page-head-line">Razas</h4>
  </div>
</div>
<div class="razas">
  <div class="row">
  <!--para poder acceder a la varable como un arreglo-->
   @foreach($razas as $raza)
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
                  <td>{{$raza->nombre}}</td>
                </tr>
                <tr>
                  <th>Aproximación de lactancia:</th>
                </tr>
                <tr>
                  <td>{{$raza->minutos_de_produccion_de_leche}} minutos</td>
                </tr>
                <tr>
                  <th>Aproximación cuando tiene en celo:</th>
                </tr>
                <tr>
                  <td>{{$raza->dias_de_celo}} días</td>
                </tr>
                <tr>
                  <th>Cuanto tiempo tarda la gestación o eclosión:</th>
                </tr>
                <tr>
                  <td>{{$raza->semanas_de_gestacion}} semanas</td>
                </tr>
                <tr>
                  <td> {!!link_to_route('raza.edit', $title='Editar', $parameters=$raza->id, $attributes=['class'=>'btn btn-primary'])!!} </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- End  Kitchen Sink --> 
    </div>
    @endforeach </div>
    <!--es importante para poder conpaginar -->
  {!!$razas->render()!!} </div>
@endsection

@section('scripts')
		{!!Html::script('js/script1.js')!!}
	@endsection 