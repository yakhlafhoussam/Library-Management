<?php

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
        $books->deletebook($_POST['delete']);
        header('location: explore');
        exit();
    }
} else {
    $srcpage = '/../pages/explore.php';

    $stackBook = $books->getbook();

    include __DIR__ . '/../templates/layout.php';
}
