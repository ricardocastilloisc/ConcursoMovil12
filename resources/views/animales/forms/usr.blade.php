<div class="form-group"> {!!Form::label('Nombre:')!!}
  {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Ingrese su Nombre','style'=>'text-transform:uppercase'])!!} </div>
<div class="form-group"> {!!Form::label('Arete:')!!}
  {!!Form::text('arete',null,['class'=>'form-control', 'placeholder'=>'Ingrese el Arete','style'=>'text-transform:uppercase'])!!} </div>
<div class="form-group"> {!!Form::label('raza','Raza:')!!}
  {!!Form::select('raza_id',$razas, null, array('class' => 'form-control'))!!} </div>
<div class="form-group">
{!!Form::label('Fecha de Compra:')!!}
{!!Form::date('fecha_de_compra',null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
{!!Form::label('Fecha de Nacimiento:')!!}
{!!Form::date('fecha_de_nacimiento',null, ['class' => 'form-control'])!!}
</div>
<div class="form-group"> {!!Form::label('Peso:')!!}
  {!!Form::text('peso',null,['class'=>'form-control', 'placeholder'=>'Ingrese el peso','style'=>'text-transform:uppercase'])!!} </div>
<div class="form-group">
  {!!Form::label('Sexo:')!!}
  {!!Form::select('sexo', array('Hembra' => 'Hembra', 'Macho' => 'Macho'),null, ['class' => 'form-control'])!!}
</div>
