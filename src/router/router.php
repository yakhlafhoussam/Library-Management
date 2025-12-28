<?php

$page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$allPages = [
    "/" => "home_controller.php",
    "/explore" => "explore_controller.php",
    "/description" => "desc_controller.php",
    "/signup" => "signup_controller.php",
    "/login" => "login_controller.php",
    "/profile" => "profile_controller.php",
    "/newbook" => "newbook_controller.php",
    "/borrow" => "borrow_controller.php",
];

if (isset($allPages[$page])) {
    $path = $allPages[$page];
} else {
    $path = "404_controller.php";
    $page = '404';
}

include __DIR__ . '/../controllers/' . $path;


?>