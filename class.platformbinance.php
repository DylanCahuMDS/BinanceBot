<?php

class PlatformBinance
{
    private Analyzer $analyzer;
    private Trader $trader;

<<<<<<< HEAD

    public function __construct(Analyser $analyser, Trader $trader){
        $this->analyser = $analyser;
=======
    public function __construct(Analyzer $analyzer, Trader $trader)
    {
        $this->analyzer = $analyzer;
>>>>>>> 0c924a69d22f7f9f2091c343738d174ac3200402
        $this->trader = $trader;
    }

    public function run(): void
    {

        while ( $command = $this->analyzer->waitForCommand()) {
            Logger::log("Command received: " . $command->getAction());
            if ($command->getAction() == "buy") {

                // Ramener le prix a 20
                $quantity = 20/$command->getPrice();

                $this->trader->buy(
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