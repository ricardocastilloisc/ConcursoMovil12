<div class="destetes">
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
                <th>Fecha:</th>
                <th>Operaciones</th>
              </tr>
            </thead>
            <tbody>
            
            @foreach($destetes as $deteste)
            <tr>
              <td>{{ $deteste->arete }}</td>
              <td>{{ $deteste->fecha_de_destete }}</td>
              <td> {!!link_to_route('destete.edit', $title='Editar', $parameters=$deteste->id, $attributes=['class'=>'btn btn-primary'])!!} </td>
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
{!!$destetes->render()!!}