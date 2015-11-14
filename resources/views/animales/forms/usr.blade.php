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

<div class="form-group"> {!!Form::label('Nombre:')!!}
<!--los primeros comapos son textos que forzamos a mayusculas
hay que aclarar que en laravel para poder ser uso de los datos que 
quermos es con Form-->
  {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Ingrese su Nombre','style'=>'text-transform:uppercase','onkeyup'=>'javascript:this.value=this.value.toUpperCase();'])!!} </div>
<div class="form-group"> {!!Form::label('Arete:')!!}
  {!!Form::text('arete',null,['class'=>'form-control', 'placeholder'=>'Ingrese el Arete','style'=>'text-transform:uppercase','onkeyup'=>'javascript:this.value=this.value.toUpperCase();'])!!} </div>
<div class="form-group"> {!!Form::label('raza','Raza:')!!}
<!--Select con los parametros que necesitamos-->
  {!!Form::select('raza_id',$razas, null, array('class' => 'form-control'))!!} </div>
<div class="form-group">
<!--igual que los anteriores solo declaramos pero en tipo date-->
{!!Form::label('Fecha de Compra:')!!}
{!!Form::date('fecha_de_compra',null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
{!!Form::label('Fecha de Nacimiento:')!!}
{!!Form::date('fecha_de_nacimiento',null, ['class' => 'form-control'])!!}
</div>
<div class="form-group"> {!!Form::label('Peso:')!!}
  {!!Form::text('peso',null,['class'=>'form-control', 'placeholder'=>'Ingrese el peso','style'=>'text-transform:uppercase','onkeyup'=>'javascript:this.value=this.value.toUpperCase();'])!!} </div>
<div class="form-group">
  {!!Form::label('Sexo:')!!}
  {!!Form::select('sexo', array('Hembra' => 'Hembra', 'Macho' => 'Macho'),null, ['class' => 'form-control'])!!}
</div>
