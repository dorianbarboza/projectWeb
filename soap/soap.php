<?php
include_once('modelos/usuariom.php');

    $params = array('uri' => "http://localhost/soap/soap.php");
    $soap = new SoapServer(NULL, $params);
    $soap->setClass("UsuarioM");
    $soap->handle();
