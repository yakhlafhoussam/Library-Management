<?php

class user_class {
    public $first;
    public $last;
    public $gender;
    public $email;
    public $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function signup($first, $last, $gender, $conn) {
        $this->first = $first;
        $this->last = $last;
        $this->gender = $gender;

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$this->email]);
        if ($stmt->fetch(PDO::FETCH_ASSOC) > 0) {
            return false;
        } else {
            $stmt = $conn->prepare("INSERT INTO users (firstName, lastName, email, password, role, gender) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$this->first, $this->last, $this->email, password_hash($this->password, PASSWORD_DEFAULT), 'reader', $gender]);
            return true;
        }
    }
    public function login($conn) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$this->email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($this->password, $user['password'])) {
            $userID = $user['id'];
            $userROLE = $user['role'];
            include __DIR__ . '/../config/session.php';
            return true;
        } else {
            return false;
        }
    }
    public function logout() {
        session_unset();
        session_destroy();
        header('location: /');
    }
}

?>