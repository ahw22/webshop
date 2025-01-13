<?php

class Database
{

    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pw = "";
    private $db_name = "shop";

    public function connect()
    {
        try {
            $dsn = "mysql:host=" . $this->db_host . ";dbname=" . $this->db_name;
            $pdo = new PDO($dsn, $this->db_user, $this->db_pw);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }


}