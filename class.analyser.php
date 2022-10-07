<?php
include("class.algorithm.php");
include("class.proxydataretriever.php");

class Analyser{
    public $url;
    public $commandresponse;

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

    public function waitForCommand(){
        
        $brutdata = $this-> getAlgoInstruction();
        $this-> commandreponse = [
            $signal = $brutdata[0],
            $symbol = $brutdata[1],
            $price = $brutdata[2]
        ];

        return $this->$commandresponse;
    }

}