<?php

$page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$allPages = [
    "/" => "home_controller.php",
    "/book" => "book_controller.php",
    "/explore" => "explore_controller.php",
    /* "/about" => "about_controller.php",
    "/register" => "register_controller.php",
    "/login" => "login_controller.php",
    "/profile" => "profile_controller.php",
    "/logout"  => "logout_controller.php" */
];

if (isset($allPages[$page])) {
    $path = $allPages[$page];
} else {
    $path = "404_controller.php";
}

include __DIR__ . '/../controllers/' . $path;

?>