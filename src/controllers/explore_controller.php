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
    }
} else {
    $srcpage = '/../pages/explore.php';

    $stackBook = $books->getbook();

    include __DIR__ . '/../templates/layout.php';
}
