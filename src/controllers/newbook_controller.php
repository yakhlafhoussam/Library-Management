<?php

if (!isset($_SESSION['id'])) {
    header('location: 404');
}

include __DIR__ . '/../config/database.php';

$hyk = new db ();
$conn = $hyk->connect();

$title = '';
$author = '';
$year = '';
$cover = '';
$errormsg = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $cover = $_POST['cover'];

    if (empty($title) || empty($author) || empty($year) || empty($cover)) {
        $errormsg = 'Please fill in all fields';
    } elseif (!filter_var($cover, FILTER_VALIDATE_URL)) {
        $errormsg = 'Invalid URL';
    } else {
        include __DIR__ . '/../models/admin_class.php';
        $adminUse = new admin_class ($conn);
        $addBook = $adminUse->add($title, $author, $year, $cover);
        $errormsg = 'Good';
    }
}

$srcpage = '/../pages/newbook.php';

include __DIR__ . '/../templates/layout.php';

?>