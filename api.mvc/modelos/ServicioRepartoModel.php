<?php
    require_once('core/db_abstract_model.php');
    class ServicioRepartoModel extends DBAbstractModel{

        public function __construct(){ }

        /************
          GET ServicioReparto
        *************/
        public function getServicioReparto(){
            $this->query="SELECT * FROM ServicioReparto";
            $this->get_results_from_query();
            if(count($this->rows) > 0){

                return [
                    "datos"=>$this->rows

                ];
            }
        }

        /********************
          POST INSERT ServicioReparto
        *********************/
        function agregarServicioReparto($array){
            if(!empty($array)){
                $consulta = "INSERT INTO `ServicioReparto` (`DireccionProducto`, `DireccionDestino`, `FechaServicio`, `HoraServicio`,`CostoTotal`,`CostoComision`) /*,ID_VehiculoRepartidor`*/
                 VALUES (
                     '$array->DireccionProducto',
                      '$array->DireccionDestino',
                      '$array->FechaServicio',
                      '$array->HoraServicio',
                      '$array->CostoTotal',
                      '$array->CostoComision');";


            }
            $this->query = $consulta;
            // Ejecutar sentencia preparada
            $result = $this->execute_single_query();
                if ($result['mensaje'] == "Registrado"){
                    return [
                        "datos" =>"Se ha registrado"
                    ];

            }else{
                return [
                    "error"=>"Error en el JSON"
                ];
            }
    }

    /*************************
      POST UPDATE Repartidor
    *************************/

    function actualizarServicioReparto($array){
      if(!empty($array)){
        $consulta = "UPDATE ServicioReparto
        SET ServicioReparto.DireccionProducto = '$array->DireccionProducto',
            ServicioReparto.DireccionDestino = '$array->DireccionDestino',
            ServicioReparto.FechaServicio = '$array->FechaServicio',
            ServicioReparto.HoraServicio = '$array->HoraServicio',
            ServicioReparto.CostoTotal = '$array->CostoTotal',
            ServicioReparto.CostoComision = '$array->CostoTotal'
        WHERE  ServicioReparto.ID_ServicioReparto = $array->ID_ServicioReparto";
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

    /*************************
      POST DELETE Repartidor
    *************************/

    function eliminarServicioReparto($array){
        if(!empty($array)){
            $consulta = "DELETE FROM `ServicioReparto`
            WHERE ServicioReparto.ID_ServicioReparto = $array->ID_ServicioReparto";
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
