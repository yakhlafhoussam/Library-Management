<?php

class borrow_class {

    public $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function isactive() {
        $stmt = $this->conn->prepare("SELECT * FROM borrows WHERE returnDate IS NULL");
        $stmt->execute();
        $borrow = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($borrow) > 0) {
            return $borrow;
        } else {
            return false;
        }
    }

    public function close() {
        $stmt = $this->conn->prepare("SELECT * FROM borrows WHERE returnDate IS NOT NULL");
        $stmt->execute();
        $borrow = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($borrow) > 0) {
            return $borrow;
        } else {
            return false;
        }
    }
}

?>