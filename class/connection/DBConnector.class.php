<?php

Class DBConnector{
    
    static Connection $mysql;

    public static function getConnection(): Connection{
        if($mysql == null){
            $mysql = new MySqlInstance(
                "localhost",
                "user",
                "password",
                "dbName"
                );
        }
        return $mysql;
    }
}

?>