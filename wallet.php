<?php

//class Wallet implement bank
class Wallet implements Bank
{
    //function storemoney
    public function storemoney(double $amount)
    {//sql instance
        $sql = new mysqli("localhost", "root", "", "bank");
        //if sql connect error
        if ($sql->connect_error) {
            //die
            die("Connection failed: " . $sql->connect_error);
        }
       // sql update 
        $sql->query("UPDATE `wallet` SET `amount` = `amount` + $amount");
        //sql close
        $sql->close();
    }
}