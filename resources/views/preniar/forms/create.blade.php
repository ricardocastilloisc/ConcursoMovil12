

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


<div class="form-group"> {!!Form::label('arete_madre','Selecciona al animal:')!!} 
  <!--Select con los parametros en este caso la madre que necesitamos--> 
  {!!Form::select('animal_id',$madres, null, array('class' => 'form-control'))!!} </div>
<!--Aqui tenemos la fecha para el destete-->
<div class="form-group"> {!!Form::label('Fecha del preñiamiento:')!!}
  {!!Form::date('fecha_de_preniada',null, ['class' => 'form-control'])!!} </div>

