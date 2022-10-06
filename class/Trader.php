<?php
Class Trader{
    int id;
    private String accessKey;
    private String uid;
    bool isTrading;
    [...]
    public bool setAccessKey(String s){
         if(isTrading){
             this.accessKey = s;
             return true;
         }
         else{
             return false;
         }
    }
}

>