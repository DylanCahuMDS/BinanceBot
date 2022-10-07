<?php

//class banker implement bank
class Banker implements Bank
{
    private Wallet $myWallet;

    private float $buffer;

    public function storeMoney(float $amount)
    {
        $buffer += $amount;

        if($buffer>1000){
            $myWallet->storeMoney($buffer);
            $buffer = 0;
        }
    }
}