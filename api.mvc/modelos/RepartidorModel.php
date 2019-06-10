<?php
/* Modificar */
    require_once('core/db_abstract_model.php');
    class RepartidorModel extends DBAbstractModel{

        public function __construct() { }

// GET

        public function obtenerRepartidores(){
            $this->query="SELECT * FROM Repartidor";
            $this->get_results_from_query();
            if(count($this->rows) > 0){

                return [
                    "datos"=>$this->rows

                ];
            }
        }

    // POST INSERT

        function agregarRepartidor($array){
            if(!empty($array)){
                $consulta = "INSERT INTO `Repartidor` (`Nombre`, `Apellido`, `Correo`, `Sexo`,`FechaNacimiento`) /*,ID_VehiculoRepartidor`*/
                 VALUES (
                     '$array->Nombre',
                      '$array->Apellido',
                      '$array->Correo',
                      '$array->Sexo',
                      '$array->FechaNacimiento');";


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

    function actualizarRepartidor($array){
      if(!empty($array)){
        $consulta = "UPDATE Repartidor
        SET Repartidor.Nombre = '$array->Nombre',
            Repartidor.Apellido = '$array->Apellido',
            Repartidor.Correo = '$array->Correo',
            Repartidor.Sexo = '$array->Sexo',
            Repartidor.FechaNacimiento = '$array->FechaNacimiento'
        WHERE  Repartidor.ID_Repartidor = $array->ID_Repartidor";
      }

      //echo $consulta;
      $this->query = $consulta;
      // Ejecutar sentencia preparada
      $result = $this->execute_single_query();
      if ($result['mensaje'] == "Registrado"){
        return [
          "datos" =>"Registro actualizado"
        ];
      }else{
        return [
          "error"=>"Error en el JSON2"
        ];
      }
    }


    function eliminarRepartidor($array){
        if(!empty($array)){
            $consulta = "DELETE FROM `Repartidor`
            WHERE Repartidor.ID_Repartidor = $array->ID_Repartidor";
        }

           //echo $consulta;
           $this->query = $consulta;
           // Ejecutar sentencia preparada
           $result = $this->execute_single_query();
           if ($result['mensaje'] == "Registrado"){
                   return [
                       "datos" =>"Registro eliminado"
                   ];

           }else{
               return [
                   "error"=>"Error en el JSON2"
               ];
           }
    }



 }

?>
