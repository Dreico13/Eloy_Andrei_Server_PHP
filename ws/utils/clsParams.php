<?php

class Params
{
    private array $query = array();
    private array $params = array();
    private mixed $value;
    private string $url;


    public function getParams(){

        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            echo 'Viene por get';
        }else{
            echo 'comeme los huevos';
        }
                
    }
}

?>