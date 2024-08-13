<?php
require_once '../config/database.php';

class User {
    public $id;
    public $username;
    public $password;

    public static function create($username, $password, $email) {
        $pdo = connect();
        $stmt = $pdo->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
        $stmt->execute([
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'email'=> $email
        ]);
        return $pdo->lastInsertId();
    }

    public static function findByUsername($username) {
        $pdo = connect();
        $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username');
        $stmt->execute(['username' => $username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
