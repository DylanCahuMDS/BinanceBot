<?php

require("class.Wallet.php");
require("class.analyse.php");


$analyse = new analyse('url');
$analyse->getAlgoIns;
$wallet = new Wallet;

/*
$wallet -> storeMoney(30);
$wallet -> withdrawMoney(10);
echo $wallet -> getMyMoney();
*/

echo $wallet -> getACrypto('BTC');

?>