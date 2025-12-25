<?php

class db
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function connect()
    {
        $this->servername = 'localhost';
        $this->username = 'HoussamYK';
        $this->password = 'houssam.123.321';
        $this->dbname = 'library';

        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            return 'Something is wrong';
        }
    }
}
