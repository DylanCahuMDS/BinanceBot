<?php

class Wallet{

    // déclaration des propriétés
    private $funds;
    private $crypto;
    private $url;
    private $data = array();

    public function __construct(){
        $this->funds = $funds;
        $this->url = $url;

    }
    public function getData(){
        $json = file_get_contents($this->url);
        $this->data = json_decode($json, true);
        return $this->data;
    }

    public function getFonds($funds){
        if($this->funds > 0){
            return $funds;
        }
        else {
            return null;
        }
}


}