<div class="form-group"> {!!Form::label('Nombre de la Raza:')!!}
  {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la Raza','style'=>'text-transform:uppercase'])!!} </div>
<div class="form-group"> {!!Form::label('Tiempo Aproximado de Procucción')!!}
  {!!Form::number('minutos_de_produccion_de_leche',null,['class'=>'form-control', 'placeholder'=>'En minutos','style'=>'text-transform:uppercase'])!!} </div>
<div class="form-group"> {!!Form::label('Cada cuando tiene mes de en celo: ')!!}
  {!!Form::number('meses_de_celo',null,['class'=>'form-control', 'placeholder'=>'En meses','style'=>'text-transform:uppercase'])!!} </div>
<div class="form-group"> {!!Form::label('Duración de gestación: ')!!}
  {!!Form::number('meses_de_gestacion',null,['class'=>'form-control', 'placeholder'=>'En meses','style'=>'text-transform:uppercase'])!!} </div>
