<?php

class DatabaseConnector {
    private $dbConnection = null;

    public function __construct()
    {
        # TODO: use getenv to get environment variables
        $host = "127.0.0.1";
        $port = "3301";
        $db = "s27268";
        $user = "s27268";
        $pass = "Tom.Wako";

        try {
            $this->dbConnection = new \PDO(
                "mysql:host=$host;port=$port;charset=utf8mb4;dbname=$db",
                $user,
                $pass
            );
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->dbConnection;
    }
}