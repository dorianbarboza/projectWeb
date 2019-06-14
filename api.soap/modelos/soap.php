<?php
include_once('usuariom.php');

    $params = array('uri' => "api.peopleapp.com/api.soap/modelos/soap.php");
    $soap = new SoapServer(NULL, $params);
    $soap->setClass("UsuarioM");
    $soap->handle();