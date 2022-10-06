<?php

class Wallet{
    List<Block> funds;

    publix CryptoBlock getblock(){
        if(funds.length >0){
            CryptoBlock oneBlock = reserve[0];
            funds.remove(0);
            return oneBlock;
        }
        else{ return null; }
    }
    piblic CryptoBlock saveBlock(CryptoBlock oneBlock){
        funds[funds.length] = oneBlock;
        
    }
}