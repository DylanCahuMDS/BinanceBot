<?php

Class AdapterCoinbase2Binance extends TraderBinance
{
    private TraderCoinBase $traderCb;

    public  function setTraderToAdapt(TraderCoinbase $c){
        $this->traderCoinBase = $c;
    }

    public function sell(){
        $this->traderCb->sell();
    }
}



?>