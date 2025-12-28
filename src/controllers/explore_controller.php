<?php

$errormsg = '';

include __DIR__ . '/../config/database.php';

$hyk = new db();
$conn = $hyk->connect();

include __DIR__ . '/../models/book_class.php';

$books = new book_class($conn);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['chose'])) {
        $chose = $_POST['chose'];
        include __DIR__ . '/desc_controller.php';
    } elseif (isset($_POST['delete']) && isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
        include __DIR__ . '/../models/admin_class.php';
        $del = new admin_class($conn);
        $result = $del->deletebook($_POST['delete']);
        if ($result) {
            header('location: explore');
            exit();
        } else {
            $errormsg = 'This book is borrowed by someone !';
            $chose = $_POST['delete'];
            include __DIR__ . '/desc_controller.php';
        }
    } elseif (isset($_POST['borrow']) && isset($_SESSION['role'])) {
        include __DIR__ . '/../models/reader_class.php';
        $del = new reader_class($_SESSION['id']);
        $result = $del->borrowBook($_POST['borrow'], $conn);
        if (!$result) {
            $errormsg = 'This book is borrowed by someone !';
            $chose = $_POST['borrow'];
            include __DIR__ . '/desc_controller.php';
        } elseif ($result == 'already_has_book') {
            $errormsg = "You cannot borrow more than one book at a time !";
            $chose = $_POST['borrow'];
            include __DIR__ . '/desc_controller.php';
        } elseif ($result == 'succes') {
            header('location: /borrow');
            exit();
        }
    }
} else {
    $srcpage = '/../pages/explore.php';

    $stackBook = $books->getbook();

    include __DIR__ . '/../templates/layout.php';
}
