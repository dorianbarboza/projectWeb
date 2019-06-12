<?php
    require 'modelos/ClienteModel.php';
    class Cliente {

        private $clienteModel;
        public function get($parametros){
            //echo var_dump($parametros);
            $this->clienteModel = new ClienteModel();
            if(!empty($parametros[0])){
                switch($parametros[0]){

                    case 'getCliente':
                        return $this->clienteModel->getCliente();
                    break;


                    default:
                        return [ "error"=>"No hay parámetros para buscar una solicitud"];
                    break;
                }
                }
              }

              public function post($parametros){
                $this->clienteModel = new ClienteModel();
                  /*
                      Se obtiene el JSON
                  */
                  $cuerpo = file_get_contents('php://input');

                  //Se decodifica el JSON para volverlo como una arreglo
                  $array = json_decode($cuerpo);
                  //echo $array['user'];
                  //Se busca el recurso pedido por el usuario
                  switch($parametros[0]){
                      case 'insertarCliente':
                      return $this->clienteModel->agregarCliente($array);
                      break;


                      default:
                      echo 'Error';
                      break;

                  }
              }

 }

?>
