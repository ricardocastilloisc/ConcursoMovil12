<!--para reclicar codigo y vistas 
solo decimos que quermos 
y en este caso temos un tema
que bootstrap recomienda-->

@extends('template.template') 
<!--se pone por la calculadora--> 


<!--en la seccion conten ponemos todo lo que 
quermos en el contenido hay que 
aclarar que en la platilla principal 
decidimos donde esta el conten--> 
@section('content') 
<!--incluimos las alertas--> 
@include('alerts.request') 
<!--Lo anteriormente mencionado recalcamos 
que laravel tiene web service 
y esto aclara 
que para guardar todo 
como nuevo accedemos al 
metodo store y para poder ejecutarlo con eficiencia --> 

{!!Form::open(['route'=>'preniar.store', 'method'=>'POST'])!!} 
<!--incluimos el formlario osea estamos reciclando el odigo--> 
@include('preniar.forms.create')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!} 
		<!--Cerramos el formulario--> 
		{!!Form::close()!!}
@endsection 
