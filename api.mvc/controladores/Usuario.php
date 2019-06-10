<?php
    require 'modelos/UsuarioModel.php';
    class Usuario {

        private $userModel;
        public function get($parametros){
            //echo var_dump($parametros);
            $this->userModel = new UsuarioModel();
            if(!empty($parametros[0])){
                switch($parametros[0]){

                    case 'obtenerUsuarios':
                        return $this->userModel->obtenerUsuarios();
                    break;


                    default:
                        return [ "error"=>"No hay parámetros para buscar una solicitud"];
                    break;
                }



        }
    }

    public function post($parametros){
        $this->userModel = new UsuarioModel();
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

            case 'obtenerRepartidor':
            return $this->userModel->obtenerRepartidor();
            break;


            default:
            echo 'Error';
            break;

        }
    }

 }

?>
