<?php

class Param{

    private string $name;
    private string $default_value;
    private string $mandatory;


    public function setName(string $pName) :void {
        $this->name = $pName;
    }


    public function getName() : string {
        return $this->name;
    }

    public function setDefaultValue(string $pDefaultValue) :void {
        $this->default_value = $pDefaultValue;
    }

    public function getDefaultValue() : string {
        return $this->default_value;
    }

    public function setMandatory(string $pMandatory) :void {
        $this->mandatory = $pMandatory;
    }

    public function geMandatory() : string {
        return $this->mandatory;
    }

}


?>