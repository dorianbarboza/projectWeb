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

        // POST INSERT

            function agregarCliente($array){
                if(!empty($array)){
                    $consulta = "INSERT INTO `Cliente` (`Username`, `Password`, `Correo`,`Telefono`, `Nombre`,`Apellidos`,`FechaNacimiento`,`Ciudad`,`Sexo`)
                     VALUES (
                         '$array->Username',
                          '$array->Password',
                          '$array->Correo',
                          '$array->Telefono',
                          '$array->Nombre',
                          '$array->Apellidos',
                          '$array->FechaNacimiento',
                          '$array->Ciudad',
                          '$array->Sexo');";


                }
                $this->query = $consulta;
                // Ejecutar sentencia preparada
                $result = $this->execute_single_query();
                    if ($result['mensaje'] == "Registrado"){
                        return [
                            "datos" =>"Se ha registrado al repartidor"
                        ];

                }else{
                    return [
                        "error"=>"Error en el JSON"
                    ];
                }
        }



    }

?>
