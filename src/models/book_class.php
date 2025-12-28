<?php

class book_class {

    public $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getbook() {
        $stmt = $this->conn->prepare("SELECT * FROM books");
        $stmt->execute();
        $book = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($book == 0) {
            return false;
        } else {
            return $book;
        }
    }

    public function getbookInfo($id) {
        $stmt = $this->conn->prepare("SELECT * FROM books WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>