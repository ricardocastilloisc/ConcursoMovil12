<div class="preniars">
  <div class="row">
    <div class="col-md-6"> 
      <!--   Kitchen Sink -->
      <div class="panel panel-default">
        <div class="panel-heading"> <strong>Datos:</strong> </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>Arete:</th>
                  <th>Fecha Preñiada:</th>
                  <th>Operaciones</th>
                </tr>
              </thead>
              <tbody>
              
              @foreach($preniars as $preniar)
              <tr>
                <td>{{ $preniar->arete }}</td>
                <td>{{ $preniar->fecha_de_preniada }}</td>
                <td> {!!link_to_route('preniar.edit', $title='Editar', $parameters=$preniar->id, $attributes=['class'=>'btn btn-primary'])!!} </td>
              </tr>
              @endforeach
                </tbody>
              
            </table>
          </div>
        </div>
      </div>
      <!-- End  Kitchen Sink --> 
    </div>
  </div>
  {!!$preniars->render()!!} 