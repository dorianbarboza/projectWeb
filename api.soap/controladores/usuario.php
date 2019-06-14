<?php
    require 'modelos/usuariom.php';
    class Usuario{
        private $userModel;

        public function __construct(){
            
        }

       

        public function post($parametros){
            $this->userModel = new usuarioM();
            /*
                Se obtiene el JSON
            */
            $cuerpo = file_get_contents('php://input');
            
            //Se decodifica el JSON para volverlo como una arreglo
            $array = json_decode($cuerpo);
            //echo $array['user'];
            //Se busca el recurso pedido por el usuario
    
            switch($parametros[0]){
                case 'insertarUsuario':
                return $this->userModel->agregarUsuario($array);
                break;

                case 'actualizarUsuario':
                return $this->userModel->actualizarUsuario($array);
                break;

                case 'eliminarUsuario':
                return $this->userModel->eliminarUsuario($array);
                break;

                case 'insertarRepartidor':
                return $this->userModel->insertarRepartidor($array);
                break;


                default:
                echo 'Error';
                break;
         
            }
        }

    }
?>
