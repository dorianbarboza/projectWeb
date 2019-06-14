<?php
    require_once('core/db_abstract_model.php');
    class ServicioRepartoModel extends DBAbstractModel{

        public function __construct(){ }

        /************
          GET Cliente
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
          POST INSERT Cliente
        *********************/

            function agregarServicioReparto($array){
                if(!empty($array)){
                    $consulta = "INSERT INTO `ServicioReparto` (`DireccionProducto`,`DireccionDestino`,`FechaServicio`,`HoraServicio`,`CostoTotal`,`CostoComision`,`ID_Cliente`,`ID_Repartidor`)
                     VALUES (
                         '$array->DireccionProducto',
                          '$array->DireccionDestino',
                          '$array->FechaServicio',
                          '$array->HoraServicio',
                          '$array->CostoTotal',
                          '$array->CostoComision',
                          '$array->ID_Cliente',
                          '$array->ID_Repartidor');";


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

        /********************
          POST UPDATE Cliente
        *********************/

        function actualizarServicioReparto($array){
          if(!empty($array)){
            $consulta = "UPDATE ServicioReparto
            SET ServicioReparto.DireccionProducto = '$array->DireccionProducto',
                ServicioReparto.DireccionDestino = '$array->DireccionDestino',
                ServicioReparto.FechaServicio = '$array->FechaServicio',
                ServicioReparto.CostoTotal = '$array->CostoTotal',
                ServicioReparto.CostoComision = '$array->CostoComision',
                ServicioReparto.ID_Cliente = '$array->ID_Cliente',
                ServicioReparto.ID_Repartidor = '$array->ID_Repartidor'
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



    }

?>
