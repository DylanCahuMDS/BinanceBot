<?php

require("class.Wallet.php");


$wallet = new Wallet;

//$wallet -> storeMoney(30);
//$wallet -> withdrawMoney(30);
//echo $wallet -> getMyMoney();

$wallet -> storeCryptos(2);
$wallet -> getACrypto('BTC');

?>