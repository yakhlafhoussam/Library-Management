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
}
?>