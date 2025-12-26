<?php

class profile_class {
    public $id;

    public function __construct($userID, $conn) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$userID]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->id = $user['id'];
    }

    public function profile($conn) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$this->id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $userData = [
            'first' => $user['firstName'],
            'last' => $user['lastName'],
            'email' => $user['email'],
            'gender' => $user['gender'],
        ];
        return $userData;
    }
}

?>