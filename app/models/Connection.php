<?php

namespace app\models;

abstract class Connection
{
    private $dbname = 'mysql:host=mysql;dbname=mvcdocker';
    private $user = 'root';
    private $pass = 'root';

    protected function connect(){
        try {
            $conn = new \PDO($this->dbname,$this->user,$this->pass);
            $conn->exec("set names utf8");
            return $conn;
        } catch (\PDOException $erro) {
            $error = $erro->getMessage();
        }        
    }
}