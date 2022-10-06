<?php
Class Trader{

    private int $id;
    private String $accessKey;
    private String $uid;
    private bool $isTrading;

    public function setAccessKey(String $s)
    {
        if($this->isTrading){
            $this->accessKey = $s;
            return true;
        }
        else{
            return false;
        }
    }
}

?>