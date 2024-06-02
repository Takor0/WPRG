<?php
require $_SERVER['DOCUMENT_ROOT'] . '/projekt/api/db/DatabaseConnector.php';
require $_SERVER['DOCUMENT_ROOT'] . '/projekt/api/main.php';

class UserModel
{
    private $dbConnection = null;

    public function __construct()
    {
        $this->dbConnection = (new DatabaseConnector())->getConnection();
    }

    public function getUsers()
    {
        $stmt = $this->dbConnection->prepare("SELECT * FROM user");
        $stmt->execute();
        $users = $stmt->fetchAll();
        $_SERVER['DOCUMENT_ROOT'] . '/projekt/api'($users);
    }

    public function getUserByEmail($email)
    {
        $stmt = $this->dbConnection->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch();
    }
}