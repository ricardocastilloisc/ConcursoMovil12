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

<div class="form-group"> {!!Form::label('arete_madre','Selecciona la madre de la cria:')!!}
<!--Select con los parametros en este caso la madre que necesitamos-->
 {!!Form::select('arete_madre',$madres, null, array('class' => 'form-control'))!!} </div>


<div class="form-group"> {!!Form::label('Nombre:')!!}
<!--los primeros comapos son textos que forzamos a mayusculas
hay que aclarar que en laravel para poder ser uso de los datos que 
quermos es con Form-->
 {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Ingrese su Nombre','style'=>'text-transform:uppercase','onkeyup'=>'javascript:this.value=this.value.toUpperCase();'])!!}</div>

<div class="form-group"> {!!Form::label('Arete:')!!}
  {!!Form::text('arete',null,['class'=>'form-control', 'placeholder'=>'Ingrese el Arete','style'=>'text-transform:uppercase','onkeyup'=>'javascript:this.value=this.value.toUpperCase();'])!!} </div>
<div class="form-group"> {!!Form::label('raza','Raza:')!!}
<!--Select con los parametros que necesitamos-->
 {!!Form::select('raza_id',$razas, null, array('class' => 'form-control'))!!} </div>

<div class="form-group">
{!!Form::label('Fecha de Nacimiento:')!!}
{!!Form::date('fecha_de_nacimiento',null, ['class' => 'form-control'])!!}
</div>


<!--Aqui tenemos que aclara que si no se pone el step no agaraba el decimal corespondiente-->
<div class="form-group"> 
{!!Form::label('Peso (kg):')!!}
{!!Form::number('peso',null,['step'=>'any','class'=>'form-control', 'placeholder'=>'peso en kg','style'=>'text-transform:uppercase','onkeyup'=>'javascript:this.value=this.value.toUpperCase();'])!!}
</div>
<div class="form-group">
  {!!Form::label('Sexo:')!!}
  {!!Form::select('sexo', array('Hembra' => 'Hembra', 'Macho' => 'Macho'),null, ['class' => 'form-control'])!!}
</div>
