@extends('template.template')
@include('alerts.request')
@section('content')
	{!!Form::open(['route'=>'animal.store', 'method'=>'POST'])!!}
		@include('animales.forms.usr')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop
 