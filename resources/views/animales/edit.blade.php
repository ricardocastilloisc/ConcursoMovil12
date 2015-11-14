<!--incluimos el tema principal-->
@extends('template.template')

	@section('content')
		@include('alerts.request')

<!--PARA PODER modificar los daros necesitmao sel PUt 
y accedemos al metodo uodate que esta en controlador animal-->
			{!!Form::model($animales,['route'=> ['animal.update',$animales->id],'method'=>'PUT'])!!}
				@include('animales.forms.usr')
            <table>
  <tr>
                <td> {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}</td>
      <!--Metodo delete para poder eleminar los datos -->
                <td> {!!Form::open(['route'=> ['animal.destroy',$animales->id],'method'=>'DELETE'])!!}
      {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
      {!!Form::close()!!} </td>
              </tr>
</table>
@endsection