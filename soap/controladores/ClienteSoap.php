<?php
    // require 'modelos/soap.php';
    class ClienteSoap{
        public function __construct(){

        }

        public function post($parametros){
            // return 0;
            $params = array(
                "location"=>"http://localhost/soap/soap.php",
                "uri"=>"localhost/soap/soap.php",
                "trace"=>1 );
            $client = new SoapClient(null, $params);
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
                return $client->__soapCall("agregarCliente", array($array));
                break;
                // case 'actualizarUsuario':
                // return $this->userModel->actualizarUsuario($array);
                // break;
                // case 'eliminarUsuario':
                // return $this->userModel->eliminarUsuario($array);
                // break;
                case 'insertarRepartidor':
                try{
                    return $client->__soapCall("insertarRepartidor", array($array));
                }catch(SoapFault $e){
                    return $client->__getLastResponse();
                }
                break;
                default:
                echo 'Error';
                break;

            }
        }
    }
?>
