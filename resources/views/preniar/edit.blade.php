<!--incluimos el tema principal-->

@extends('template.template')


  @section('content')
    @include('alerts.request') 

<!--PARA PODER modificar los daros necesitmao sel PUt 
y accedemos al metodo uodate que esta en controlador animal--> 
{!!Form::model($preniar,['route'=> ['preniar.update',$preniar->id],'method'=>'PUT'])!!}
				@include('preniar.forms.usr')
<table>
  <tr>
    <td> {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}</td>
    <!--Metodo delete para poder eleminar los datos -->
    <td> {!!Form::open(['route'=> ['preniar.destroy',$preniar->id],'method'=>'DELETE'])!!} 
      <!--protegemos el filtro a la hora de eliminar--> 
      
      {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
      {!!Form::close()!!} </td>
  </tr>
</table>
@endsection 
<!--se pone por la calculadora--> 
