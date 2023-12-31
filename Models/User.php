<?php

namespace Models;

use Models\Database;

class User
{
    private $conn;
    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConn();
    }

    public function all()
    {
        $sql = "SELECT * FROM users";
        try {
            $stm = $this->conn->prepare($sql);
            $stm->execute();
            $rs = $stm->fetchAll(\PDO::FETCH_ASSOC);
            return $rs;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    function create($username, $email, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);


        $sql  = 'INSERT INTO `users`(`user`, `email`, `password`) VALUES (?,?,?)';

        try {
            $stm = $this->conn->prepare($sql);
            $stm->execute([$username, $email, $hashedPassword]);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getUser($username)
    {
        $sql = "SELECT * FROM `users` WHERE user = ?";
        
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$username]);
            $user = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $user;
        } catch (\PDOException $e) {
            echo "Error executing SQL: " . $e->getMessage();
            return null;
        }
    }
    
    
}
