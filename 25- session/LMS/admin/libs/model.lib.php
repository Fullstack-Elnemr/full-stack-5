<?php

class Model
{
    protected static function dbh(){
        try{
            return new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
        }catch (PDOException $exception) {
            if(ENV == 'dev') {
                echo $exception->getMessage();
            }
            die;
        }
    }
}
