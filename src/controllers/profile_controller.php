<?php

if (!isset($_SESSION['id'])) {
    header('location: 404');
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
$numBorrow;

include __DIR__ . '/../models/profile_class.php';

$profile = new profile_class($userID, $conn);
$userInfo = $profile->profile($conn);

include __DIR__ . '/../templates/layout.php';

?>