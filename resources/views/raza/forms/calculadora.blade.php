<!--Aqui tenemos la calculadora con sus respectivas
funciones y se pueda sobre poner de la ventana actual-->
<table align="rigth">
  <tbody>
    <tr>
    <!--el boton principal que nos permitira poder acceder a la calculadora sobre
    puesta en la pagina sin 
    necesidad de redirccionarte a otra area de la aplicacion -->
    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Calculadora</button>
      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog"> 
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Calculadora:</h4>
            </div>
            <div class="modal-body">
              <div>
                <table id="calculadora" width="100%">
                  <tr>
                    <td colspan="4" ><div id="resultado_calculadora"></div></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>/</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>*</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>0</td>
                    <td>C</td>
                    <td>.</td>
                    <td>+</td>
                  <tr>
                    <td colspan="4" align="center">=</td>
                  </tr>
                  </tr>
                  
                </table>
                </center>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      </div></td>
    </tr>
  </tbody>
</table>
