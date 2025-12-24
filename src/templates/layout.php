<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshelves | <?php if ($page == "/") {
                            echo "Home";
                        } else {
                            echo ucfirst(trim($page, "/"));
                        } ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Hegarty&family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pixelify+Sans:wght@400..700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Press+Start+2P&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>

<body class="h-screen overflow-y-scroll">
    <?php
    include 'header.php';
    ?>
    <main id="hyk" class="<?php if ($page == '/description') { echo 'h-[80%]'; } else { echo 'min-h-[80%]'; } ?> overflow-hidden relative">
        <?php
        include __DIR__ . $srcpage;
        ?>
    </main>
    <?php
    include 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
</body>

</html>