<div class="w-screen h-full flex flex-col items-center py-10">
    <h1 class="font-bold text-5xl text-[#C37A67] mb-10">The Borrows</h1>
    <?php 
    if (isset($borrowInfo) && $_SESSION['role'] == 'admin') {
        for ($i=0; $i < count($borrowInfo); $i++) {
        echo '
    <div class="w-4/5 h-20 bg-[#ffffdc] flex justify-around items-center rounded-3xl my-4">
        <img class="w-14 h-w-14" src=';
        if ($borrowInfo[$i]['gender'] == 'M') { echo '"assets/img/man.png">'; } else { echo '"assets/img/woman.png">'; }
        echo '
        <h1 class="w-1/5 max-w-52">' . $borrowInfo[$i]['first'] . ' ' . $borrowInfo[$i]['last'] . '</h1>
        <h1 class="w-1/5 max-w-52">' . $borrowInfo[$i]['email'] . '</h1>
        <h1 class="w-1/5 max-w-52">' . $borrowInfo[$i]['title'] . '</h1>
        <h1 class="">' . $borrowInfo[$i]['date'] . '</h1>
    </div>';
        }
    } elseif (isset($borrowInfo) && $_SESSION['role'] == 'reader') {
        echo '
    <div class="w-4/5 h-20 bg-[#ffffdc] flex justify-around items-center rounded-3xl my-4">
        <img class="w-14 h-w-14" src=';
        if ($borrowInfo['gender'] == 'M') { echo '"assets/img/man.png">'; } else { echo '"assets/img/woman.png">'; }
        echo '
        <h1 class="w-1/5 max-w-52">' . $borrowInfo['first'] . ' ' . $borrowInfo['last'] . '</h1>
        <h1 class="w-1/5 max-w-52">' . $borrowInfo['email'] . '</h1>
        <h1 class="w-1/5 max-w-52">' . $borrowInfo['title'] . '</h1>
        <h1 class="">' . $borrowInfo['date'] . '</h1>
        <form method="POST">
            <input class="hidden" name="chose" value="' . $borrowInfo['bookid'] . '">
            <button id="send" type="submit" class="bg-red-600 px-8 py-2 rounded-full font-bold text-lg transition-transform hover:scale-[1.02] text-white hover:bg-red-500">Return</button>
        </from>
    </div>';
    } else {
        echo '<img class="w-1/4" src="assets/img/empty.png" alt="">
        <h1 class="font-bold text-3xl text-[#36454F] mb-10">There is no borrow right now</h1>';
    }
    ?>
    <div class="w-80 h-80 rounded-full bg-[#C37A67] opacity-25 fixed z-[-9999] -bottom-3 -left-3"></div>
    <div class="w-60 h-60 rounded-full bg-[#A4882C] opacity-25 fixed z-[-9999] -top-5 -right-3"></div>
    <div class="w-60 h-60 rounded-full bg-[#9CAF88] opacity-25 fixed z-[-9999] bottom-3 -right-6"></div>
    <div class="w-40 h-40 rounded-full bg-[#7DF9FF] opacity-25 fixed z-[-9999] left-[40%]"></div>
    <div class="w-60 h-60 rounded-full bg-[#718C9E] opacity-25 fixed z-[-9999] -top-10 -left-3"></div>
</div>

