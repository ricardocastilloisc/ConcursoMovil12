<!--agregamos la calculadora para
que pueda calcular los kg-->

@include('raza.forms.calculadora') 
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
<div class="form-group"> {!!Form::label('Fecha del registro:')!!}
  {!!Form::date('fecha_de_registro',null, ['class' => 'form-control'])!!} </div>

<!--Aqui tenemos que aclara que si no se pone el step no agaraba el decimal corespondiente-->
<div class="form-group"> {!!Form::label('Peso (kg):')!!}
  {!!Form::number('peso_actual',null,['step'=>'any','class'=>'form-control', 'placeholder'=>'peso en kg','style'=>'text-transform:uppercase','onkeyup'=>'javascript:this.value=this.value.toUpperCase();'])!!} </div>

<!--aqui podemos reguardar el filtro para que redireccione al crecmineto que hemos creado
o que hemos creado o que hemos--> 
{!! Form::hidden('animal_id', null) !!}
<input type="hidden" name="vivo" value="1">
