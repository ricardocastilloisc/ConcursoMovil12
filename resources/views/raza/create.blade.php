@extends('template.template')
@include('alerts.request')
@section('content')
	{!!Form::open(['route'=>'raza.store', 'method'=>'POST'])!!}
		@include('raza.forms.usr')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop
 