<div class="form-group">
   </label>{!!Form::label('Nombre:')!!}
   {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Ingrese su Nombre'])!!}  
</div>
<div class="form-group">
   </label>{!!Form::label('Arete:')!!}
   {!!Form::text('arete',null,['class'=>'form-control', 'placeholder'=>'Ingrese su Nombre'])!!}  
</div>
<div class="form-group">
    <label for="raza">Text Field:</label>
    <input type="text" name="raza" class="form-control">
</div>
<div class="form-group">
    <label for="fecha_de_compra">Fecha de Compra:</label>
    <input type="date" name="fecha_de_compra" class="form-control">
</div>
<div class="form-group">
    <label for="fecha_de_nacimiento">Fecha de Nacimiento:</label>
    <input type="date" name="fecha_de_nacimiento" class="form-control">
 </div>
<div class="form-group">
    <label for="peso">Peso:</label>
    <input type="text" name="peso" class="form-control">
</div>
<div class="form-group">
    <label for="sexo">
    Select:</label>
    <select name="sexo" class="form-control">
		<option value="1">Hembra</option>
		<option value="0">Macho</option>
    </select>
</div>


