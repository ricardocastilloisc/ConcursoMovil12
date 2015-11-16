<div class="animales">
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
                  <!--sin tener que explicar mucho solo 
                accedemos a los valores de la variable-->
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
                <!--Si no se compro en la granadero no lo muestres-->
              @if($animal->fecha_de_compra!='0000-00-00')
              <tr>
                <th>Fecha de Compra:</th>
              </tr>
              <tr>
                <td>{{$animal->fecha_de_compra}}</td>
              </tr>
              @endif 
              <!--Termina--> 
              <!--Si no se nacio en la granadero no lo muestres--> 
              @if($animal->fecha_de_nacimiento!='0000-00-00')
              <tr>
                <th>Fecha de Nacimiento:</th>
              </tr>
              <tr>
                <td>{{$animal->fecha_de_nacimiento}}</td>
              </tr>
              @endif 
              <!--termina--> 
              <!--si la madre es del granadero entonces ponlo--> 
              @if($animal->arete_madre!='')
              <tr>
                <th>Arete Madre:</th>
              </tr>
              <tr>
                <td>{{$animal->arete_madre}}</td>
              </tr>
              @endif 
              <!--termina-->
              <tr>
                <th>Peso:</th>
              </tr>
              <tr>
                <td>{{$animal->peso}} kg</td>
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