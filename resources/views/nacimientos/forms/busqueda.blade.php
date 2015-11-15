
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
                  <!--dividimos las busquedas esta es la primera division que es 
                busqueda por arete-->
                  <div class="col-md-12">
                    <table align="left">
                      <tr>
                        <td colspan="2"> {!!Form::label('Arete:')!!} </td>
                      </tr>
                      <tr>
                        <td> {!!Form::open(['route'=>'nacimiento.index','method'=>'GET', 'class'=>'navbar-form navbar-left','role'=>'search'])!!}
                          <div class="form-group"> {!!Form::text('arete', null,['class'=>'form-control', 'placeholder'=>'Buscar por arete'])!!} </div></td>
                        <td><button type="submit" class="btn btn-default">Buscar</button>
                          {!!Form::close()!!} </td>
                      </tr>
                    </table>
                  </div>
                  <!--termina la primera división--> 
                  <!--segunda división busqueda por raza-->
                  <div class="col-md-12">
                    <table align="left">
                      <tr>
                        <td colspan="2"> {!!Form::label('Raza:')!!} </td>
                      </tr>
                      <tr>
                        <td> {!!Form::open(['route'=>'nacimiento.index','method'=>'GET', 'class'=>'navbar-form navbar-left','role'=>'search'])!!}
                          <div class="form-group"> {!!Form::select('raza_id',$razas, null, array('class' => 'form-control'))!!} </div></td>
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
                        <td colspan="2"> {!!Form::label('Fecha de nacimiento:')!!} </td>
                      </tr>
                      <tr>
                        <td> {!!Form::open(['route'=>'nacimiento.index','method'=>'GET', 'class'=>'navbar-form navbar-left','role'=>'search'])!!}
                          <div class="form-group"> {!!Form::date('fecha_de_nacimiento',null, ['class' => 'form-control'])!!} </div></td>
                        <td><button type="submit" class="btn btn-default">Buscar</button>
                          {!!Form::close()!!} </td>
                      </tr>
                    </table>
                  </div>
                  <!--termina--> 
                   <!--dividimos las busquedas esta es la primera division que es 
                busqueda por arete-->
                  <div class="col-md-12">
                    <table align="left">
                      <tr>
                        <td colspan="2"> {!!Form::label('Arete madre:')!!} </td>
                      </tr>
                      <tr>
                        <td> {!!Form::open(['route'=>'nacimiento.index','method'=>'GET', 'class'=>'navbar-form navbar-left','role'=>'search'])!!}
                          <div class="form-group"> {!!Form::text('arete_madre', null,['class'=>'form-control', 'placeholder'=>'Buscar por arete'])!!} </div></td>
                        <td><button type="submit" class="btn btn-default">Buscar</button>
                          {!!Form::close()!!} </td>
                      </tr>
                    </table>
                  </div>
                  <!--termina la primera división--> 
                  <!--dividimos las busquedas
                         quinta division busqueda por sexo-->
                  <div class="col-md-12">
                    <table align="left">
                      <tr>
                        <td colspan="2"> {!!Form::label('Sexo:')!!} </td>
                      </tr>
                      <tr>
                        <td> {!!Form::open(['route'=>'nacimiento.index','method'=>'GET', 'class'=>'navbar-form navbar-left','role'=>'search'])!!}
                          <div class="form-group"> {!!Form::select('sexo', array('Hembra' => 'Hembra', 'Macho' => 'Macho'),null, ['class' => 'form-control'])!!} </div></td>
                        <td><button type="submit" class="btn btn-default">Buscar</button>
                          {!!Form::close()!!} </td>
                      </tr>
                    </table>
                  </div>
                  <!--termina la primera división--> 
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
      @if ((isset($_GET['arete']))||(isset($_GET['raza_id']))||(isset($_GET['arete_madre']))||(isset($_GET['fecha_de_compra']))||(isset($_GET['fecha_de_nacimiento']))||(isset($_GET['sexo'])) )
      <td> || </td>
      <!--Redirigete-->
      <td> {!!link_to_route('nacimiento.index', $title='Volver a ver todos lo animales', null, $attributes=['class'=>'btn btn-primary'])!!} </td>
      @endif 
      <!--termina--> 
    </tr>
  </tbody>
</table>
