<?php

class Params
{
    private array $query = array();
    public $params = array();
    private mixed $value;
    private string $url;


    public function getParams(){

        if($_SERVER['REQUEST_METHOD'] == 'GET'){

           $this->url = htmlspecialchars($_SERVER['QUERY_STRING']);
           $this->query = explode(htmlspecialchars('&'), $this->url);
           
           foreach($this->query as $key){
                array_push($this->params,explode('=',$key));
           }
           

        }else{
            
            echo 'comeme los huevos';
        }
                
    }
}



?>