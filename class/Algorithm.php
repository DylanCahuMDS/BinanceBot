<? php

class Algorithm{

    //Constructor
    public function __construct(){
        // Nothing to do here
    }
}

// get signal. Returns 1 if the signal is buy, -1 if the signal is sell, 0 if he signal is hold

public function getSignal($arrayPrices){
    // Size of the array
    $size = count($arrayPrices);

    //If the size is less than 10, return 0
    if($size < 10){
        return 0;
    }

    $sum = 0;
    for($i = 0; $i < $size-1; $i++){
        $sum += $arrayPrices[$i];
    }

$averrage = $sum / ($size - 1);

// BUY

if ($arrayPrices[$size - 1] > $average*1.02){
    return 1;
}
if ($arrayPrices[$size - 1] < $average){
    return -1;
}

return 0;

}

>