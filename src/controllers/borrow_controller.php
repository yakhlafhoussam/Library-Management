<?php

if (!isset($_SESSION['id'])) {
    $srcpage = '/../pages/404.php';
    include __DIR__ . '/../templates/layout.php';
    exit();
}

$srcpage = '/../pages/borrow.php';

include __DIR__ . '/../config/database.php';

$hyk = new db ();
$conn = $hyk->connect();

include __DIR__ . '/../models/borrow_class.php';

$borrows = new borrow_class($conn);

$borrowsBook = $borrows->isactive();

if ($borrowsBook) {
    include __DIR__ . '/../models/book_class.php';
    include __DIR__ . '/../models/profile_class.php';
    $books = new book_class($conn);
    $borrowInfo = [];
    for ($i=0; $i < count($borrowsBook); $i++) { 
        $bookInfo = $books->getbookInfo($borrowsBook[$i]['bookId']);
        $userInfo = new profile_class($borrowsBook[$i]['readerId'], $conn);
        $readerInfo = $userInfo->profile($conn);
        $readerB = [
            'first' => $readerInfo['first'],
            'last' => $readerInfo['last'],
            'gender' => $readerInfo['gender'],
            'email' => $readerInfo['email'],
            'title' => $bookInfo['title'],
            'date' => $borrowsBook[$i]['borrowDate']
        ];
        array_push($borrowInfo, $readerB);
    }
}

include __DIR__ . '/../templates/layout.php';

?>