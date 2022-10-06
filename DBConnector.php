<?php

Class DBConnector{
    
    static Connection mysql;

    public static Connection getConnection(){
        if(mysql == null){
            mysql = new MySqlInstance(
                "localhost",
                "user",
                "password",
                "dbName"
                );
        }
        return mysql;
    }
}

?>