<?php

namespace App;

use PDO;
use PDOStatement;

class Database
{
    private $dsn = "mysql:dbname=ecommerce;host=localhost";
    private $username  = "root";
    private $password = "louis260701";
    private $connexion;
    private $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
    public function __construct()
    {
        $this->connexion = new PDO($this->dsn, $this->username, $this->password, $this->option);
        $this->connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    public function query($query, $params = []): bool|PDOStatement
    {
        if ($params) {
            $request = $this->connexion->prepare($query);
            $request->execute($params);
        } else {
            $request = $this->connexion->query($query);
        }
        return $request;
    }
}
