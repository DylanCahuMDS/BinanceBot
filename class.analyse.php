<?php
include("class.algorithm.php");
include("class.dataretriever.php");

class Analyse{
    public $url;

    public function __constructor($url){
        $this->url = $url;
    }
    
    public function getAlgoInstruction(){
        while(true){
            $dataRetrever = new DataRetriever($this->url);
            sleep(3);
        }
        $algoResponse = new Algorithm($dataRetrever);
        return $algoResponse;
    }

}