<?php

include "class.algorithm.php";
include "class.dataretriever.php";
include "class.proxydataretriever.php";

include "interface.bank.php";
include "class.wallet.php";
include "class.banker.php";

include "abstract.class.traderfactory.php";
include "class.binanceTraderFactory.php";
include "interface.trader.php";
include "class.traderBinance.php";
include "class.analyzer.php";
include "class.platformbinance.php";
include "class.command.php";

$factory = new BinanceTraderFactory();
$analizer = new Analyzer(
    new ProxyDataRetriever(
        new DataRetriever("https://api.binance.com/api/v3/ticker/price")
    ),
    new Algorithm()
);

$bank = new Banker(new Wallet());

$pltf = new PlatformBinance($analizer, $factory->createTrader($bank));

$pltf->run();