
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
<div class="form-group">
{!!Form::label('Fecha del desteste:')!!}
{!!Form::date('fecha_de_destete',null, ['class' => 'form-control'])!!}
</div>

