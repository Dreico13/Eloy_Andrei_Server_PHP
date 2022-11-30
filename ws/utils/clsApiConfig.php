<?php

class ApiConfig{

    private $obj_xml;
    private $params_collection;

    public function __construct($pFile) {

        $this->readXML($pFile);
        $this->getParamCollection();

    }

    private function readXML (string $xmlPath)   {
        $this -> obj_xml = simplexml_load_file($xmlPath);
    }

    private function getParamCollection(){

        $this->params_collection = $this->obj_xml-> xpath('//params_collection');

        var_dump($this->params_collection);
        
        die;

    }

    private function getSpecificParams(){
        
    }
}

?>