  <script type="text/javascript">
    var Caracteristica = ["ADECUACIÓN FUNCIONAL","EFICIENCIA DE DESEMPEÑO","COMPATIBILIDAD","USABILIDAD","FIABILIDAD","SEGURIDAD","MANTENIBILIDAD","PORTABILIDAD"];
    var defCaracteristica = ["Es la capacidad del producto software para proporcionar funciones que satisfacen las necesidades declaradas e implícitas, cuando el producto se usa en las condiciones especificadas.","Esta característica representa el desempeño relativo a la cantidad de recursos utilizados bajo determinadas condiciones.",
                    "Capacidad de dos o más sistemas o componentes para intercambiar información y/o llevar a cabo sus funciones requeridas cuando comparten el mismo entorno hardware o software.",
                    "Capacidad del producto software para ser entendido, aprendido, usado y resultar atractivo para el usuario, cuando se usa bajo determinadas condiciones.",
                    "Capacidad de un sistema o componente para desempeñar  las funciones especificadas, cuando se usa bajo unas condiciones y periodo de tiempo determinados.",
                    "Capacidad de protección de la información y los datos de manera que personas o sistemas no autorizados no puedan leerlos o modificarlos.",
                    "Esta característica representa la capacidad del producto software para ser modificado efectiva y eficientemente, debido a necesidades evolutivas, correctivas o perfectivas.",
                    "Capacidad del producto o componente de ser transferido de forma efectiva y eficiente de un entorno hardware, software, operacional o de utilización a otro."];

    function ObtenerCar(id){
      document.getElementById("cabezera").innerHTML = this.Caracteristica[id];
      document.getElementById("cuerpo").innerHTML = this.defCaracteristica[id];
    }
  </script>

  <div class="modal fade" id="ModalGenerico">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
      
        <div class="modal-header" style="background-color: #337AB7;">
          <h4 class="modal-title" style="color: white;" id="cabezera"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <div class="modal-body" id="cuerpo">
        </div>
        
        <div class="modal-footer" style="background-color: #E7E7E7">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>