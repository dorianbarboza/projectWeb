<?php
    require_once('core/db_abstract_model.php');
    class UsuarioModel extends DBAbstractModel{

        public function __construct(){

        }

        /************************
          GET Usuarios
        *************************/
        
        public function obtenerUsuarios(){
            $this->query="SELECT * FROM usuario";
            $this->get_results_from_query();
            if(count($this->rows) > 0){

                return [
                    "datos"=>$this->rows

                ];
            }
        }

        function agregarUsuario($array){
            if(!empty($array)){
                $consulta = "INSERT INTO `usuario` (`nombre`, `correo`, `sexo`, `fechaNacimiento`)
                 VALUES (
                     '$array->nombre',
                      '$array->correo',
                      '$array->sexo',
                      '$array->fechaNacimiento');";
            }
            $this->query = $consulta;
            // Ejecutar sentencia preparada
            $result = $this->execute_single_query();
                if ($result['mensaje'] == "Registrado"){
                    return [
                        "datos" =>"Se ha registrado el usuario"
                    ];

            }else{
                return [
                    "error"=>"Error en el JSON"
                ];
            }
    }



    function actualizarUsuario($array){
        if(!empty($array)){
            $consulta = "UPDATE usuario
                SET usuario.nombre = '$array->nombre',
                usuario.correo = '$array->correo',
                usuario.sexo = '$array->sexo',
                usuario.fechaNacimiento = '$array->fechaNacimiento'

                    WHERE  usuario.idUsuario = $array->idUsuario
            ";

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


    function eliminarUsuario($array){
        if(!empty($array)){
            $consulta = "DELETE FROM `usuario`
            WHERE usuario.idUsuario = $array->idUsuario";
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
