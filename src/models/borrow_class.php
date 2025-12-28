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

    public function readerisactive($id) {
        $stmt = $this->conn->prepare("SELECT * FROM borrows WHERE returnDate IS NULL AND readerId = ?");
        $stmt->execute([$id]);
        $borrow = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($borrow) {
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