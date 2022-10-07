<?php

class PlatformBinance{
    
    private Analyser $analyser;
    private Trader $trader;

    public function run(): void
    {

        while ($command = $this->analyser->waitForCommand()){

            if ($command["action"] == "buy") {
                $quantity = 1;

                $this->trader-buy($command["symbol"], $quantity, $command["price"]);
            } else {
                $this->trader->sell($command["symbol"], $command["price"]);
            }
        }

    }

}