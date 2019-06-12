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
        VIEW_FORMULARIO_PRINCIPAL,ADD_USER,FORMULARIO_CERRAR_SESION,
        FORMULARIO_VALIDAR, FORMULARIO_EDITAR, FORMULARIO_ELIMINAR, DELETE_USER, FORMULARIO_LOGINN, VIEW_HOME, VIEW_PERFIL);

    foreach ($peticiones as $peticion) {
        $uri_peticion = MODULO . $peticion . '/';

        if (strpos($uri, $uri_peticion) == true) {
            $event = $peticion;

        }
    }

    $user_data = helper_user_data();
    $usuario = set_obj();

    switch ($event) {
        case ADD_USER:
            //cho var_dump($user_data);
            $resultado = $usuario->set($user_data);
            // $data = array('mensaje' =>$resultado);
            retornar_vista(VIEW_FORMULARIO_PRINCIPAL);
        break;
        case EDIT_USER:
            //cho var_dump($user_data);
            //var_dump($user_data);
            $resultado = $usuario->edit($user_data);
            //echo $resultado;
            //$data = array('mensaje' =>$resultado);
            retornar_vista(VIEW_FORMULARIO_PRINCIPAL);
        break;
        case DELETE_USER:
            $resultado = $usuario->delete($user_data);
            retornar_vista(VIEW_FORMULARIO_PRINCIPAL);
        break;





        case GET_USER:
            $usuario->get($user_data);
            $data = array(
                'nombre' => $usuario->nombre,
                'apellido' => $usuario->apellido,
                'email' => $usuario->email
            );
            retornar_vista(VIEW_EDIT_USER, $data);
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
        default:
            retornar_vista($event);
    }
}
function set_obj() {
    $obj = new Usuario();
    return $obj;
}

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

handler();

?>
