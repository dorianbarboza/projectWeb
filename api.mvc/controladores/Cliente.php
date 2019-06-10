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

 }

?>
