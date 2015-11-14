<div class="animales">
<!--visualizamos lo que queremos 
con las variables se 
hace otra vista porque 
ajax o laravel nos pide que declaresmoa tal cual
lo que quermos 
visualizar en la paginacion-->
<div class="row"> @foreach($animales as $animal)
  <div class="col-md-6"> 
    <!--   Kitchen Sink -->
    <div class="panel panel-default">
      <div class="panel-heading"> <strong>Datos:</strong> </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
            <tbody>
              <tr>
                <th>Nombre:</th>
              </tr>
              <tr>
                <td>{{$animal->nombre}}</td>
              </tr>
              <tr>
                <th>Arete:</th>
              </tr>
              <tr>
                <td>{{$animal->arete}}</td>
              </tr>
              <tr>
                <th>Animal:</th>
              </tr>
              <tr>
                <td>{{$animal->raza}}</td>
              </tr>
              <tr>
                <th>Fecha de Compra:</th>
              </tr>
              <tr>
                <td>{{$animal->fecha_de_compra}}</td>
              </tr>
              <tr>
                <th>Fecha de Nacimiento:</th>
              </tr>
              <tr>
                <td>{{$animal->fecha_de_nacimiento}}</td>
              </tr>
              <tr>
                <th>Peso:</th>
              </tr>
              <tr>
                <td>{{$animal->peso}}</td>
              </tr>
              <tr>
                <th>Sexo:</th>
              </tr>
              <tr>
                <td>{{$animal->sexo}}</td>
              </tr>
              <tr>
                <td> {!!link_to_route('animal.edit', $title='Editar', $parameters=$animal->id, $attributes=['class'=>'btn btn-primary'])!!} </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- End  Kitchen Sink --> 
  </div>
  @endforeach </div>
{!!$animales->render()!!}