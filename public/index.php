<?php

$page = $_SERVER['REQUEST_URI'];
if ($page == '/') {
    $page = 'home';
    $srcpage = '../src/pages/home.php';
} else {
    $srcpage = '../src/pages/' . $page . '.php';
}

if (file_exists($srcpage)) {
    include "../src/templates/layout.php";
} else {
    $page = '404';
    $srcpage = '../src/pages/404.php';
    include "../src/templates/layout.php";
}

?>