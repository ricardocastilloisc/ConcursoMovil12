<!--incluimos el tema principal-->

@extends('template.template')
@section('css')
{!!Html::style('css/calculador.css')!!}
@endsection 

	@section('content')
		@include('alerts.request') 

<!--PARA PODER modificar los daros necesitmao sel PUt 
y accedemos al metodo uodate que esta en controlador animal--> 
{!!Form::model($nacimientos,['route'=> ['nacimiento.update',$nacimientos->id],'method'=>'PUT'])!!}
				@include('nacimientos.forms.usr')
<table>
  <tr>
    <td> {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}</td>
    <!--Metodo delete para poder eleminar los datos -->
    <td> {!!Form::open(['route'=> ['nacimiento.destroy',$nacimientos->id],'method'=>'DELETE'])!!}
      {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
      {!!Form::close()!!} </td>
  </tr>
</table>
@endsection 
<!--se pone por la calculadora--> 
@section('scripts')
    {!!Html::script('js/cal.js')!!}
@endsection 