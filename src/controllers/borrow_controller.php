<?php

if (!isset($_SESSION['id'])) {
    $srcpage = '/../pages/404.php';
    include __DIR__ . '/../templates/layout.php';
    exit();
}

include __DIR__ . '/../config/database.php';

$hyk = new db();
$conn = $hyk->connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include __DIR__ . '/../models/reader_class.php';

    $returnBook = new reader_class($_SESSION['id']);
    $returnBook->returnBook($_POST['chose'], $conn);
    header('location: /');
    exit();
}

$srcpage = '/../pages/borrow.php';

include __DIR__ . '/../models/borrow_class.php';

$borrows = new borrow_class($conn);

if ($_SESSION['role'] == 'admin') {
    $borrowsBook = $borrows->isactive();

    if ($borrowsBook) {
        include __DIR__ . '/../models/book_class.php';
        include __DIR__ . '/../models/profile_class.php';
        $books = new book_class($conn);
        $borrowInfo = [];
        for ($i = 0; $i < count($borrowsBook); $i++) {
            $bookInfo = $books->getbookInfo($borrowsBook[$i]['bookId']);
            $userInfo = new profile_class($borrowsBook[$i]['readerId']);
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
} else {
    $borrowsBook = $borrows->readerisactive($_SESSION['id']);

    if ($borrowsBook) {
        include __DIR__ . '/../models/book_class.php';
        include __DIR__ . '/../models/profile_class.php';
        $books = new book_class($conn);
        $bookInfo = $books->getbookInfo($borrowsBook['bookId']);
        $userInfo = new profile_class($_SESSION['id']);
        $readerInfo = $userInfo->profile($conn);
        $borrowInfo = [
            'first' => $readerInfo['first'],
            'last' => $readerInfo['last'],
            'gender' => $readerInfo['gender'],
            'email' => $readerInfo['email'],
            'title' => $bookInfo['title'],
            'date' => $borrowsBook['borrowDate'],
            'bookid' => $borrowsBook['bookId']
        ];
    }
}

include __DIR__ . '/../templates/layout.php';
