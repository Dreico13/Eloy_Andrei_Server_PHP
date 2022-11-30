<?php

include_once __DIR__.'/utils/clsParams.php';
include_once __DIR__.'/utils/clsProperties.php';

$obj_simpleXML = new Properties();

$obj_simpleXML -> readXML("../xml/dbxml.xml");

$obj_Params = new Params();

$obj_Params->getParams();



?>