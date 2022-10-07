<?php

require("class.Wallet.php");
require("class.analyse.php");


$analyse = new analyse('url');
$instruction = $analyse->getAlgoInstruction();

/*
function appelFonction($Instruct){
   const map = {
        1 : buy(),
        -1 : sell(),
    }

    return map[$Instruct] ?? continue ;
}
*/
$wallet = new Wallet;

/*
$wallet -> storeMoney(30);
$wallet -> withdrawMoney(10);
echo $wallet -> getMyMoney();
*/

echo $wallet -> getACrypto('BTC');

?>