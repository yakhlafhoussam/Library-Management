<?php

class user_class {
    public $id;
    public $first;
    public $last;
    public $email;
    public $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function signup($first, $last, $conn) {
        $this->first = $first;
        $this->last = $last;

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$this->email]);
        if ($stmt->fetch(PDO::FETCH_ASSOC) > 0) {
            return false;
        } else {
            $stmt = $conn->prepare("INSERT INTO users (firstName, lastName, email, password, role) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$this->first, $this->last, $this->email, password_hash($this->password, PASSWORD_DEFAULT), 'reader']);
            return true;
        }
    }
    public function login($conn) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$this->email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($this->password, $user['password'])) {
            return true;
        } else {
            return false;
        }
    }
}

?>