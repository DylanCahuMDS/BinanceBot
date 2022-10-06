<?php

//class banker implement bank
class Banker implements Bank
{
    private Wallet myWallet;

    private double buffer;

    public void storeMoney(double amount)
    {
        buffer += amount;

        if(buffer>1000){
            myWallet.storeMoney(buffer);
            buffer = 0;
        }
    }
}