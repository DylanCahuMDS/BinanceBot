<?php

class PlatformBinance{
    
    private Analyser $analyser;
    private Trader $trader;

    public function run(): void
    {

        while ($command = $this->analyser->waitForCommand()){

            if ($command["action"] == "buy") {
                //TODO : Define quantity to buy
                $quantity = 1;

                $this->trader-buy(
                    $command->getSymbol(),
                    $quantity,
                    $command->getPrice()
                );
            } else {
                $this->trader->sell(
                    $command->getSymbol(),
                    $command->getPrice()
                );
            }
        }

    }

}