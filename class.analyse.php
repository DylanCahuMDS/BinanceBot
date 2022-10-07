<?php
include("class.algorithm.php");
include("class.proxydataretriever.php");

class Analyse{
    public $url;

    public function __constructor($url){
        $this->url = $url;
    }
    
    public function getAlgoInstruction(){
        while(true){
            $dataRetrever = new ProxyDataRetriever($this->url);
            sleep(3);
        }
        $algoResponse = new Algorithm();
        
        return [$algoResponse->getSignal($dataRetrever->getData($dataRetrever->getPairPrice("BTCUSDT"))), $dataRetrever->getPairPrice("BTCUSDT")[1], $dataRetrever->getPairPrice("BTCUSDT")[0]];
    }

}