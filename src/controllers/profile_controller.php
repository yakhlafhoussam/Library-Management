<?php

if (!isset($_SESSION['id'])) {
    $srcpage = '/../pages/404.php';
    include __DIR__ . '/../templates/layout.php';
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include __DIR__ . '/../models/user_class.php';
    new user_class('logout', 'logout')->logout();
}

$srcpage = '/../pages/profile.php';

include __DIR__ . '/../config/database.php';

$hyk = new db ();
$conn = $hyk->connect();

$userID = $_SESSION['id'];
$first = '';
$last = '';
$gender = 'L';
$email = '';

include __DIR__ . '/../models/profile_class.php';

$profile = new profile_class($userID);
$userInfo = $profile->profile($conn);

include __DIR__ . '/../models/borrow_class.php';

$borrows = new borrow_class($conn);
$numBorrow = $borrows->isactive();
$closeBorrow = $borrows->close();

if ($numBorrow) {
    $numBorrow = count($numBorrow);
} if ($closeBorrow) {
    $closeBorrow = count($closeBorrow);
}

include __DIR__ . '/../templates/layout.php';

?>