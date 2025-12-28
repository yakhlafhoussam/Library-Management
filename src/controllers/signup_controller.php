<?php

if (isset($_SESSION['id'])) {
    $srcpage = '/../pages/404.php';
    include __DIR__ . '/../templates/layout.php';
    exit();
}

$srcpage = '/../pages/signup.php' ;

include __DIR__ . '/../config/database.php';

$hyk = new db ();
$conn = $hyk->connect();

$errormsg = '';
$first = '';
$last = '';
$gender = 'L';
$email = '';
$password = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    if (empty($first) || empty($last) || empty($email) || empty($password) || $gender == "L") {
        $errormsg = 'Please fill in all fields';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errormsg = 'Invalid email';
    } else {
        include __DIR__ . '/../models/user_class.php';
        $newUser = new user_class ($email, $password,);
        $signup = $newUser->signup($first, $last, $gender, $conn);
        if ($signup) {
            $errormsg = 'Good';
        } else {
            $errormsg = "Email already registered";
        }
    }
}

include __DIR__ . '/../templates/layout.php';

?>