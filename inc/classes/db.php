<?php


class db
{
   
    private $serverName;
    private $username;
    private $password;
    private $dbName;
    private $charset;

    protected function connect (){

        $this->servername="localhost";
        $this->username="root";
        $this->password="";
        $this->dbName="phpcms";
        $this->charset="utf8mb4";
        try {
            $dsn = "mysql:host=$this->serverName;dbname=$this->dbName;charset=$this->charset";
            $pdo = new PDO ($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
            return $pdo;
        }catch (Exception $e){
            die("connection failed ".$e->getmassage()_)
        }

    }
}