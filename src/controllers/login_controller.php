<?php

$srcpage = '/../pages/login.php' ;

include __DIR__ . '/../config/database.php';

$hyk = new db ();
$conn = $hyk->connect();

if (isset($_SESSION["id"])) {
    header('location: 404');
}

$errormsg = '';
$email = '';
$password = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $errormsg = 'Please fill in all fields';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errormsg = 'Invalid email';
    } else {
        include __DIR__ . '/../models/user_class.php';
        $newLogin = new user_class ($email, $password);
        $login = $newLogin->login($conn);
        if ($login) {
            $errormsg = 'THE LOG IN IS VERY VERY VERY GOOOD';
        } else {
            $errormsg = 'SF GHAYAREHA';
        }
    }
}

include __DIR__ . '/../templates/layout.php';

?>