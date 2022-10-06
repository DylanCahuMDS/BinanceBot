<?php

Class AdapterCoinbase2Binance extends TraderBinance{
    private TraderCoinBase traderCb;

    public void setTraderToAdapt(TraderCoinbase c){
        this.traderCoinBase = c;
    }

    void sell(...){
        this.traderCb.sell();
    }
}



>