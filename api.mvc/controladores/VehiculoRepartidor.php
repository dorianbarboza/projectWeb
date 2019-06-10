<?php
/* Modificar */
    require 'modelos/VehiculoRepartidorModel.php';
    class VehiculoRepartidor{
        private $vehiculoRepartModel;

        public function __construct() { }

         // GET
        // URL: http://localhost/SistemaApi/api.mvc/VehiculoRepartidor/obtenerVehiculos/

        public function get($parametros){
          //echo var_dump($parametros);
          $this->vehiculoRepartModel = new VehiculoRepartidorModel();
          if(!empty($parametros[0])){
            switch($parametros[0]){

              case 'obtenerVehiculos':
              return $this->vehiculoRepartModel->obtenerVehiculos();
              break;

              default:
              return [ "error"=>"No hay parámetros para buscar una solicitud"];
              break;
            }
          }
        }

        // POST
        // URL: http://localhost/SistemaApi/api.mvc/VehiculoRepartidor/RECURSO/

        public function post($parametros){
          $this->vehiculoRepartModel = new VehiculoRepartidorModel();
            /*
                Se obtiene el JSON
            */
            $cuerpo = file_get_contents('php://input');

            //Se decodifica el JSON para volverlo como una arreglo
            $array = json_decode($cuerpo);
            //echo $array['user'];
            //Se busca el recurso pedido por el usuario
            switch($parametros[0]){
                case 'insertarVehiculo':
                return $this->vehiculoRepartModel->agregarVehiculo($array);
                break;

                case 'actualizarVehiculo':
                return $this->vehiculoRepartModel->actualizarVehiculo($array);
                break;

                case 'eliminarVehiculo':
                return $this->vehiculoRepartModel->eliminarVehiculo($array);
                break;


                default:
                echo 'Error';
                break;

            }
        }

    }
?>
