<!--incluimos el tema principal-->

@extends('template.template')
@section('css')
{!!Html::style('css/calculador.css')!!}
@endsection 

  @section('content')
    @include('alerts.request') 

<!--PARA PODER modificar los daros necesitmao sel PUt 
y accedemos al metodo uodate que esta en controlador animal--> 
{!!Form::model($carne,['route'=> ['carne.update',$carne->id],'method'=>'PUT'])!!}
				@include('carne.forms.usr')
<table>
  <tr>
    <td> {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}</td>
    <!--Metodo delete para poder eleminar los datos -->
    <td> {!!Form::open(['route'=> ['carne.destroy',$carne->id],'method'=>'DELETE'])!!} 
      <!--protegemos el filtro a la hora de eliminar--> 
      
      {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
      {!!Form::close()!!} </td>
  </tr>
</table>
@endsection 
<!--se pone por la calculadora--> 
@section('scripts')
    {!!Html::script('js/cal.js')!!}
@endsection 