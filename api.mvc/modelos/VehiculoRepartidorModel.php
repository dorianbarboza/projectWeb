<?php
/* Modificar */
    require_once('core/db_abstract_model.php');
    class VehiculoRepartidorModel extends DBAbstractModel{

        public function __construct() { }

// GET

        public function obtenerVehiculos(){
            $this->query="SELECT * FROM VehiculoRepartidor";
            $this->get_results_from_query();
            if(count($this->rows) > 0){

                return [
                    "datos"=>$this->rows

                ];
            }
        }

    // POST INSERT

        function agregarVehiculo($array){
            if(!empty($array)){
                $consulta = "INSERT INTO `VehiculoRepartidor` (`Tipo`, `Marca`, `Modelo`, `Anio`,`Color`,`Placa`) /*,ID_VehiculoRepartidor`*/
                 VALUES (
                     '$array->Tipo',
                      '$array->Marca',
                      '$array->Modelo',
                      '$array->Anio',
                      '$array->Color',
                      '$array->Placa');";


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

    function actualizarVehiculo($array){
      if(!empty($array)){
        $consulta = "UPDATE VehiculoRepartidor
        SET VehiculoRepartidor.Tipo = '$array->Tipo',
            VehiculoRepartidor.Marca = '$array->Modelo',
            VehiculoRepartidor.Modelo = '$array->Modelo',
            VehiculoRepartidor.Anio = '$array->Anio',
            VehiculoRepartidor.Color = '$array->Color',
            VehiculoRepartidor.Placa = '$array->Placa'
        WHERE  VehiculoRepartidor.ID_VehiculoRepartidor = $array->ID_VehiculoRepartidor";
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


    function eliminarVehiculo($array){
        if(!empty($array)){
            $consulta = "DELETE FROM `VehiculoRepartidor`
            WHERE VehiculoRepartidor.ID_VehiculoRepartidor = $array->ID_VehiculoRepartidor";
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
