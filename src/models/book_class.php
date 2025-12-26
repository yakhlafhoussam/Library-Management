<?php

class book_class {

    public $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getbook() {
        $stmt = $this->conn->prepare("SELECT * FROM books");
        $stmt->execute();
        $book = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($book == 0) {
            return false;
        } else {
            return $book;
        }
    }
}

?>