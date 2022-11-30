<?php

class Properties{

    private $obj_xml;

    public function __constructor() {

    }

    public function readXML (string $xmlPath)   {
        $this -> obj_xml = simplexml_load_file($xmlPath);
        return $this -> obj_xml;
    }
}

?>