<?php

$srcpage = '/../pages/explore.php';

include __DIR__ . '/../config/database.php';

$hyk = new db ();
$conn = $hyk->connect();

include __DIR__ . '/../models/book_class.php';

$books = new book_class($conn);
$stackBook = $books->getbook();

include __DIR__ . '/../templates/layout.php';

?>