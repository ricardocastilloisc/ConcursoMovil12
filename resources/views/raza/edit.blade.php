@extends('template.template')
	@section('content')
		@include('alerts.request')
		
		{!!Form::model($raza,['route'=> ['raza.update',$raza->id],'method'=>'PUT'])!!}
			@include('raza.forms.usr')

		<table>
		<tr><td>{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}</td>
	
		<td>
		{!!Form::open(['route'=> ['raza.destroy',$raza->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
		</td>
		</tr>
		</table>
	@endsection