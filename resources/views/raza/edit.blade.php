@extends('template.template')
@section('css')

{!!Html::style('css/calculador.css')!!}

@endsection 
@section('content')
@include('alerts.request')


@include('raza.forms.calculadora')
		
		{!!Form::model($raza,['route'=> ['raza.update',$raza->id],'method'=>'PUT'])!!}
			@include('raza.forms.usr')
        <table>
  <tr>
            <td>{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
      {!!Form::close()!!}</td>
            <td> {!!Form::open(['route'=> ['raza.destroy',$raza->id],'method'=>'DELETE'])!!}
      {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
      {!!Form::close()!!} </td>
          </tr>
</table>
@endsection

@section('scripts')
    {!!Html::script('js/jquery-1.9.1.min.js')!!}
    {!!Html::script('js/cal.js')!!}
@endsection 