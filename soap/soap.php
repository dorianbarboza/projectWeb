<?php
include_once('modelos/ClienteModelo.php');

    $params = array('uri' => "projectWeb/soap/modelos/soap.php");
    $soap = new SoapServer(NULL, $params);
    $soap->setClass("ClienteModelo");
    $soap->handle();
