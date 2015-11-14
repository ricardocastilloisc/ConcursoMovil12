@extends('template.template')
	@section('content')
		@include('alerts.request')


			{!!Form::model($animales,['route'=> ['animal.update',$animales->id],'method'=>'PUT'])!!}
				@include('animales.forms.usr')
            <table>
  <tr>
                <td> {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}</td>
                <td> {!!Form::open(['route'=> ['animal.destroy',$animales->id],'method'=>'DELETE'])!!}
      {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
      {!!Form::close()!!} </td>
              </tr>
</table>
@endsection