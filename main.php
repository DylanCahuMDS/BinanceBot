<?php

include "class.algorithm.php";
include "class.dataretriever.php";
include "class.proxydataretriever.php";

include "interfaces/interface.bank.php";
include "class.wallet.php";
include "class.banker.php";

include "abstract.class.traderfactory.php";
include "binance/class.binanceTraderFactory.php";
include "interfaces/interface.trader.php";
include "binance/class.traderBinance.php";
include "class.analyzer.php";
include "binance/class.platformbinance.php";
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