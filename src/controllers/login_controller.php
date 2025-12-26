<?php

if (isset($_SESSION["id"])) {
    header('location: 404');
}

$srcpage = '/../pages/login.php' ;

include __DIR__ . '/../config/database.php';

$hyk = new db ();
$conn = $hyk->connect();

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
            header('location: /book');
        } else {
            $errormsg = 'Incorrect email or password';
        }
    }
}

include __DIR__ . '/../templates/layout.php';

?>