<div class="form-group"> {!!Form::label('Nombre de la Raza:')!!}
  {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre de la Raza','style'=>'text-transform:uppercase','onkeyup'=>'javascript:this.value=this.value.toUpperCase();'])!!} </div>
<div class="form-group">
  <label>Tiempo Aproximado de procucción</label>

  {!!Form::number('minutos_de_produccion_de_leche',null,['class'=>'form-control', 'placeholder'=>'En minutos','style'=>'text-transform:uppercase','onkeyup'=>'javascript:this.value=this.value.toUpperCase();'])!!} </div>
<div class="form-group"> {!!Form::label('Cada cuando tiene celo: ')!!}
  {!!Form::number('dias_de_celo',null,['class'=>'form-control', 'placeholder'=>'En dias','style'=>'text-transform:uppercase','onkeyup'=>'javascript:this.value=this.value.toUpperCase();'])!!} </div>
<div class="form-group"> {!!Form::label('Duración de gestación o eclosión: ')!!}
  {!!Form::number('semanas_de_gestacion',null,['class'=>'form-control', 'placeholder'=>'En semanas','style'=>'text-transform:uppercase','onkeyup'=>'javascript:this.value=this.value.toUpperCase();'])!!} </div>
