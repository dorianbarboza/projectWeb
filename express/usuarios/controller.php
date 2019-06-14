<?php
require_once('constants.php');
require_once('model.php');
require_once('view.php');

function handler()
{
    $event = VIEW_LOGIN_USER;
    $uri = $_SERVER['REQUEST_URI'];

    $peticiones = array(GET_USER, EDIT_USER,
        VIEW_SET_USER, VIEW_GET_USER, VIEW_DELETE_USER,
        VIEW_EDIT_USER,VIEW_LOGIN_USER,VIEW_FORMULARIO_USER,
        /*VIEW_FORMULARIO_PRINCIPAL,*/ADD_USER,FORMULARIO_CERRAR_SESION,
        FORMULARIO_VALIDAR, FORMULARIO_EDITAR, FORMULARIO_ELIMINAR, DELETE_USER, FORMULARIO_LOGINN, VIEW_HOME, VIEW_PERFIL
        ,FORM_PERDIR_SERVICIO, GET_SERV_REPART, ADD_SERV_REPART, ADD_SERV,FORM_SERVICIO, FORM_CONFIRMAR, FORM_CORREO
      );

    foreach ($peticiones as $peticion) {
        $uri_peticion = MODULO . $peticion . '/';

        if (strpos($uri, $uri_peticion) == true) {
            $event = $peticion;

        }
    }

    $user_data = helper_user_data();
    $servicio_data = helper_servicio_data();
    $usuario = set_obj();

    switch ($event) {
        case ADD_USER:
            //cho var_dump($user_data);
            $resultado = $usuario->set($user_data);
            // $data = array('mensaje' =>$resultado);
            retornar_vista(VIEW_HOME);
        break;
        case EDIT_USER:
            //cho var_dump($user_data);
            //var_dump($user_data);
            $resultado = $usuario->edit($user_data);
            //echo $resultado;
            //$data = array('mensaje' =>$resultado);
            retornar_vista(VIEW_HOME);
        break;
        case DELETE_USER:
            $resultado = $usuario->delete($user_data);
            retornar_vista(FORMULARIO_LOGINN);
        break;
        case ADD_SERV:
                $resultado = $usuario->setServicio($servicio_data);
                retornar_vista(VIEW_HOME);
            break;



        // case DELETE_USER:
        //     $usuario->delete($user_data['email']);
        //     $data = array('mensaje' => $usuario->mensaje);
        //     retornar_vista(VIEW_DELETE_USER, $data);
        //     break;
            case EDIT_USER:
            $usuario->edit($user_data);
            $data = array('mensaje' => $usuario->mensaje);
            retornar_vista(VIEW_GET_USER, $data);
            break;

            /* Servicio Reparto */
            case ADD_SERV_REPART:
                //cho var_dump($user_data);
                $resultado = $usuario->setServicio($servicio_data);
                // $data = array('mensaje' =>$resultado);
                retornar_vista(VIEW_HOME);
        default:
            retornar_vista($event);
    }
}
function set_obj() {
    $obj = new Usuario();
    return $obj;
}
/* Clientes */
function helper_user_data(){
    $user_data = array();
    if ($_POST) {
        if (array_key_exists('ID_Cliente', $_POST)) {
            $user_data['ID_Cliente'] = $_POST['ID_Cliente'];
        }
        if (array_key_exists('Username', $_POST)) {
            $user_data['Username'] = $_POST['Username'];
        }
        if (array_key_exists('Password', $_POST)) {
            $user_data['Password'] = $_POST['Password'];
        }
        if (array_key_exists('Correo', $_POST)) {
            $user_data['Correo'] = $_POST['Correo'];
        }
        if (array_key_exists('Telefono', $_POST)) {
            $user_data['Telefono'] = $_POST['Telefono'];
        }

        if (array_key_exists('Nombre', $_POST)) {
            $user_data['Nombre'] = $_POST['Nombre'];
        }

        if (array_key_exists('Apellidos', $_POST)) {
            $user_data['Apellidos'] = $_POST['Apellidos'];
        }

        if (array_key_exists('FechaNacimiento', $_POST)) {
            $user_data['FechaNacimiento'] = $_POST['FechaNacimiento'];
        }

        if (array_key_exists('Ciudad', $_POST)) {
            $user_data['Ciudad'] = $_POST['Ciudad'];
        }

        if (array_key_exists('Sexo', $_POST)) {
            $user_data['Sexo'] = $_POST['Sexo'];
        }
    }
    return $user_data;
}

/* Servicio Reparto */
function helper_servicio_data(){
    $servicio_data = array();
    if ($_POST) {
        if (array_key_exists('ID_ServicioReparto', $_POST)) {
            $servicio_data['ID_ServicioReparto'] = $_POST['ID_ServicioReparto'];
        }
        if (array_key_exists('DireccionProducto', $_POST)) {
            $servicio_data['DireccionProducto'] = $_POST['DireccionProducto'];
        }
        if (array_key_exists('DireccionDestino', $_POST)) {
            $servicio_data['DireccionDestino'] = $_POST['DireccionDestino'];
        }
        if (array_key_exists('FechaServicio', $_POST)) {
            $servicio_data['FechaServicio'] = $_POST['FechaServicio'];
        }
        if (array_key_exists('HoraServicio', $_POST)) {
            $servicio_data['HoraServicio'] = $_POST['HoraServicio'];
        }

        if (array_key_exists('CostoTotal', $_POST)) {
            $servicio_data['CostoTotal'] = $_POST['CostoTotal'];
        }

        if (array_key_exists('CostoComision', $_POST)) {
            $servicio_data['CostoComision'] = $_POST['CostoComision'];
        }

        if (array_key_exists('ID_Cliente', $_POST)) {
            $servicio_data['ID_Cliente'] = $_POST['ID_Cliente'];
        }

        if (array_key_exists('ID_Repartidor', $_POST)) {
            $servicio_data['ID_Repartidor'] = $_POST['ID_Repartidor'];
        }
    }
    return $servicio_data;
}

handler();

?>
