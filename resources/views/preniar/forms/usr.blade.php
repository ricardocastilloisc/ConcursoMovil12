

<!--diseñamos nuestro formulario
algo muy importante es que 
estos formularios que estan en la 
carpeta forms nos permiten acceder a datos
sin necesidad de declararlos 
laravel tiene esta opcion por defecto 
solo decimos que queremos
estos formularios se reclicar 
segun que le digamos al web service de por defecto 

-->
<!--Aqui tenemos la fecha para el destete-->
<div class="form-group"> {!!Form::label('Fecha del preñiamiento:')!!}
  {!!Form::date('fecha_de_preniada',null, ['class' => 'form-control'])!!} </div>

