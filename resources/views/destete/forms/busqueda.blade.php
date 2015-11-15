
<table align="rigth">
  <tbody>
    <tr> 
      <!--el boton principal que nos permitira poder acceder a la calculadora sobre
    puesta en la pagina sin 
    necesidad de redirccionarte a otra area de la aplicacion -->
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Hacer busqueda</button>
        
        <!-- Modal -->
        
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog"> 
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Busquedas:</h4>
              </div>
              <div class="modal-body"> 
                <!--Aui va los formularios para los metodos de busquedas-->
                
                <div class="row"> 
                
                  <!--segunda división busqueda por raza-->
                  <div class="col-md-12">
                    <table align="left">
                      <tr>
                        <td colspan="2"> {!!Form::label('Arete:')!!} </td>
                      </tr>
                      <tr>
                        <td> {!!Form::open(['route'=>'destete.index','method'=>'GET', 'class'=>'navbar-form navbar-left','role'=>'search'])!!}
                          <div class="form-group"> {!!Form::select('animal_id',$filtro, null, array('class' => 'form-control'))!!} </div></td>
                        <td><button type="submit" class="btn btn-default">Buscar</button>
                          {!!Form::close()!!} </td>
                      </tr>
                    </table>
                  </div>
                  <!--termina--> 
                  <!--dividimos las busquedas tercera division busqueda por fecha de compra-->
                  <div class="col-md-12">
                    <table align="left">
                      <tr>
                        <td colspan="2"> {!!Form::label('Fecha de destete:')!!} </td>
                      </tr>
                      <tr>
                        <td> {!!Form::open(['route'=>'destete.index','method'=>'GET', 'class'=>'navbar-form navbar-left','role'=>'search'])!!}
                          <div class="form-group"> {!!Form::date('fecha_de_destete',null, ['class' => 'form-control'])!!} </div></td>
                        <td><button type="submit" class="btn btn-default">Buscar</button>
                          {!!Form::close()!!} </td>
                      </tr>
                    </table>
                  </div>
                  <!--termina--> 
   
                </div>
                <!-- terminar lo del metodo de busqueda--> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        </div></td>
      <!--Mostrar la vuelta de resultados si existen algunos de esos--> 
      @if ((isset($_GET['animal_id']))||(isset($_GET['fecha_de_destete'])) )
      <td> || </td>
      <!--Redirigete-->
      <td> {!!link_to_route('destete.index', $title='Volver a ver todos lo animales', null, $attributes=['class'=>'btn btn-primary'])!!} </td>
      @endif 
      <!--termina--> 
    </tr>
  </tbody>
</table>
