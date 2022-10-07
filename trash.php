<?php

require("class.Wallet.php");
require("class.analyse.php");
require("class.trader.php");

$url="trash.json";
$analyse = new analyse($url);
$instruction = $analyse->getAlgoInstruction()[0];
echo $instruction;


function appelFonction($instruction){
   
    $action = array(
        -1 => "sell",
        1 => "buy"
    );

    $functionName = $action[$instruction] ?? $functionName = "wait";

    $functionName();
}

//$wallet = new Wallet;

//echo $wallet -> getACrypto('BTC');

?>