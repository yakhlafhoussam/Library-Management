<?php

class profile_class {
    public $id;

    public function __construct($userID) {
        $this->id = $userID;
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