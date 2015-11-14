@extends('template.template')
@section('css')

{!!Html::style('css/calculador.css')!!}

@endsection 
@section('content')
@include('alerts.request')


@include('raza.forms.calculadora')




	{!!Form::open(['route'=>'raza.store', 'method'=>'POST'])!!}
		@include('raza.forms.usr')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}




@endsection

@section('scripts')
		{!!Html::script('js/jquery-1.9.1.min.js')!!}
		{!!Html::script('js/cal.js')!!}
@endsection 