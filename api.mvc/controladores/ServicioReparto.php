<?php
require 'modelos/ServicioRepartoModel.php';
class ServicioReparto {

  private $servReparMode;

  // URL: http://localhost/projectWeb/api.mvc/ServicioReparto/getServicioReparto/

  public function get($parametros){
  //echo var_dump($parametros);
  $this->servReparModel = new ServicioRepartoModel();
  if(!empty($parametros[0])){
    switch($parametros[0]){
      case 'getServicioReparto':
      return $this->servReparModel->getServicioReparto();
      break;

      default:
      return [ "error"=>"No hay parámetros para buscar una solicitud"];
      break;
    }
  }
}

  // URL: http://localhost/projectWeb/api.mvc/ServicioReparto/RECURSO/

public function post($parametros){
  $this->servReparModel = new ServicioRepartoModel();
  /* Se obtiene el JSON */
  $cuerpo = file_get_contents('php://input');
  //Se decodifica el JSON para volverlo como una arreglo
  $array = json_decode($cuerpo);
  //echo $array['user'];
  //Se busca el recurso pedido por el usuario
  switch($parametros[0]){

    case 'insertarServicioReparto':
    return $this->servReparModel->agregarServicioReparto($array);
    break;

    case 'actualizarServicioReparto':
    return $this->servReparModel->actualizarServicioReparto($array);
    break;

    case 'eliminarServicioReparto':
    return $this->servReparModel->eliminarServicioReparto($array);
    break;

    default:
    echo 'Error';
    break;
  }
}
}
?>
