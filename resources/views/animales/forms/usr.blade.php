<div class="form-group"> {!!Form::label('Nombre:')!!}
  {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Ingrese su Nombre','style'=>'text-transform:uppercase'])!!} </div>
<div class="form-group"> {!!Form::label('Arete:')!!}
  {!!Form::text('arete',null,['class'=>'form-control', 'placeholder'=>'Ingrese el Arete','style'=>'text-transform:uppercase'])!!} </div>
<div class="form-group"> {!!Form::label('raza','Raza:')!!}
  {!!Form::select('raza_id',$razas, null, array('class' => 'form-control'))!!} </div>
<div class="form-group">
  <label for="fecha_de_compra">Fecha de Compra:</label>
  <input type="date" name="fecha_de_compra" class="form-control">
</div>
<div class="form-group">
  <label for="fecha_de_nacimiento">Fecha de Nacimiento:</label>
  <input type="date" name="fecha_de_nacimiento" class="form-control">
</div>
<div class="form-group"> {!!Form::label('Peso:')!!}
  {!!Form::text('peso',null,['class'=>'form-control', 'placeholder'=>'Ingrese el peso','style'=>'text-transform:uppercase'])!!} </div>
<div class="form-group">
  <label for="sexo"> Select:</label>
  <select name="sexo" class="form-control">
    <option value="Hembra">Hembra</option>
    <option value="Macho">Macho</option>
  </select>
</div>
