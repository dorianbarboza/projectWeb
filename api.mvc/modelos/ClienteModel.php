<?php
    require_once('core/db_abstract_model.php');
    class ClienteModel extends DBAbstractModel{

        public function __construct(){

        }

        /*
        Método para devuelve registros de usuarios
        */
        public function getCliente(){
            $this->query="SELECT * FROM Cliente";
            $this->get_results_from_query();
            if(count($this->rows) > 0){

                return [
                    "datos"=>$this->rows

                ];
            }
        }



    }

?>
