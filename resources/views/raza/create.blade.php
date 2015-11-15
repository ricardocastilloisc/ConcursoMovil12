@extends('template.template')
@section('css')
{!!Html::style('css/calculador.css')!!}
@endsection 
@section('content')
@include('alerts.request')
<!--solo ponemos la calculadora donde quermos que este en el content -->
@include('raza.forms.calculadora')
<!-- Poder accerder metodo para poder guardar -->
	{!!Form::open(['route'=>'raza.store', 'method'=>'POST'])!!}
		@include('raza.forms.usr')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@endsection
<!--en el aparte de scripts necesiamos declartos los metodo que js que no temos
sin necidad de ponerlos en el tema principal-->
@section('scripts')
		{!!Html::script('js/cal.js')!!}
@endsection 