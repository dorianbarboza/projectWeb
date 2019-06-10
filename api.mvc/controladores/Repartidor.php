<?php
/* Modificar */
    require 'modelos/RepartidorModel.php';
    class Repartidor{
        private $repartModel;

        public function __construct() { }

         // GET
        // URL: http://localhost/SistemaApi/api.mvc/Repartidor/obtenerRepartidores/

        public function get($parametros){
          //echo var_dump($parametros);
          $this->repartModel = new RepartidorModel();
          if(!empty($parametros[0])){
            switch($parametros[0]){

              case 'obtenerRepartidores':
              return $this->repartModel->obtenerRepartidores();
              break;

              default:
              return [ "error"=>"No hay parámetros para buscar una solicitud"];
              break;
            }
          }
        }

        // POST
        // URL: http://localhost/SistemaApi/api.mvc/repartidor/RECURSO/

        public function post($parametros){
          $this->repartModel = new RepartidorModel();
            /*
                Se obtiene el JSON
            */
            $cuerpo = file_get_contents('php://input');

            //Se decodifica el JSON para volverlo como una arreglo
            $array = json_decode($cuerpo);
            //echo $array['user'];
            //Se busca el recurso pedido por el usuario
            switch($parametros[0]){
                case 'insertarRepartidor':
                return $this->repartModel->agregarRepartidor($array);
                break;

                case 'actualizarRepartidor':
                return $this->repartModel->actualizarRepartidor($array);
                break;

                case 'eliminarRepartidor':
                return $this->repartModel->eliminarRepartidor($array);
                break;


                default:
                echo 'Error';
                break;

            }
        }

    }
?>
