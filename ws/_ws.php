<?php

include_once __DIR__.'/utils/clsParams.php';
include_once __DIR__.'/utils/clsApiConfig.php';

$obj_simpleXML = new ApiConfig("../xml/dbxml.xml");



$obj_Params = new Params();

$obj_Params->getParams();



?>