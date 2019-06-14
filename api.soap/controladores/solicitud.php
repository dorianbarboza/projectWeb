<?php
    require 'modelos/solicitudm.php';
    class Solicitud {
        public function index(){
			echo 'index desde UsuarioController';
		}
        private $model; 
        public function get($parametros){
            //echo var_dump($parametros);
            $this->model = new SolicitudM();
            if(!empty($parametros[0])){
                switch($parametros[0]){

                    case 'obtenerUsuarios':
                        return $this->model->obtenerUsuarios();
                    break;

                    case 'obtenerRepartidor':
                    return $this->model->obtenerRepartidor();
                    break;

                    case 'obtenerServicios':
                    return $this->model->obtenerServicios();
                    break;

                    default:
                        return [ "error"=>"No hay parámetros para buscar una solicitud"];  
                    break;
                }
                /*if($parametros[0] == "get" && !empty($parametros[1])){
                    return $this->model->getSolicitudById($parametros[1]);
                }else if($parametros[0] == "allDenuncias"){
                    return $this->model->getAllDenuncias();
                }else if($parametros[0] == "allNecesidades"){
                    return $this->model->getAllNecesidades();
                }else if($parametros[0] == "allSugerencias"){
                    return $this->model->hola();
                }else if($parametros[0] == "tipo" && !empty($parametros[1])){
                    return $this->model->getByTipo($parametros[1]);
                }else if($parametros[0] == "user" && !empty($parametros[1])){
                    return $this->model->getByUser($parametros[1]);
                }else{
                    return [ "error"=>"No hay parámetros para buscar una solicitud"];  
                }
            }else{
                return [ "error"=>"No se ha enviado el recurso"];
            }¨*/
        }
    }
    
 }

?>