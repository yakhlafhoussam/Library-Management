<?php

class reader_class {

    public $id;

    public function __construct($id) {
        $this->id = $id;
    }

    public function returnBook($bookId, $conn) {
        $stmt = $conn->prepare("UPDATE borrows SET returnDate = ? WHERE bookId = ?");
        $stmt->execute([date("Y-m-d H:i:s"), $bookId]);
    }

    public function borrowBook($bookId, $conn) {
        $stmt = $conn->prepare("SELECT * FROM borrows WHERE bookId = ? AND returnDate IS NULL");
        $stmt->execute([$bookId]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            $stmt = $conn->prepare("INSERT INTO borrows (readerId, bookId, borrowDate) VALUES (?, ?, ?)");
            $stmt->execute([$this->id, $bookId, date("Y-m-d H:i:s")]);
            return true;
        } else {
            return false;
        }
    }
}
?>