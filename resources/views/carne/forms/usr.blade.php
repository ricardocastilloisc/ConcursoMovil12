
<!--incluimos la calculadora-->
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

<!--Aqui tenemos la fecha para el destete-->
<div class="form-group"> {!!Form::label('Fecha del muerte:')!!}
  {!!Form::date('fecha_de_muerte',null, ['class' => 'form-control'])!!} </div>

<!--Aqui tenemos que aclara que si no se pone el step no agaraba el decimal corespondiente-->
<div class="form-group"> {!!Form::label('Aprovechamiento carne (lb):')!!}
  {!!Form::number('libras_de_aprovechamiento',null,['step'=>'any','class'=>'form-control', 'placeholder'=>'Libras de aprovechamiento','style'=>'text-transform:uppercase','onkeyup'=>'javascript:this.value=this.value.toUpperCase();'])!!} </div>