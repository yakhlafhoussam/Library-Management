<div class="w-full min-h-full flex flex-col justify-center items-center gap-12 relative">

    <div class="w-full px-4 py-10 flex flex-col justify-center items-center gap-4">
        <h1 class="font-inter font-bold text-5xl text-[#C37A67]">Welcome back <?php echo $userInfo['first'] . " " . $userInfo['last']; ?></h1>
    </div>
    <div class="w-1/3 bg-[#ffffdc] px-10 py-12 rounded-2xl flex flex-col justify-center items-center gap-8">
        <img class="w-20" src="<?php if ($userInfo['gender'] == 'M') { echo 'assets/img/man.png'; } else { echo 'assets/img/woman.png'; } ?>" alt="">
        <h1 class="w-full font-inter font-semibold text-black flex justify-between items-center"><span class="text-lg text-gray-600 text-start">First name :</span><span class="text-black w-1/2 text-start"><?php echo $userInfo['first'] ?></span></h1>
        <h1 class="w-full font-inter font-semibold text-black flex justify-between items-center"><span class="text-lg text-gray-600 text-start">Last name :</span><span class="text-black w-1/2 text-start"><?php echo $userInfo['last'] ?></span></h1>
        <h1 class="w-full font-inter font-semibold text-black flex justify-between items-center"><span class="text-lg text-gray-600 text-start">Email :</span><span class="text-black w-1/2 text-start"><?php echo $userInfo['email'] ?></span></h1>
        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { echo '<h1 class="w-full font-inter font-semibold text-black flex justify-between items-center"><span class="text-lg text-gray-600 text-start">Number of borrow :</span><span class="text-black w-1/2 text-start">' . $numBorrow . ' / ' . $numBorrow + $closeBorrow . '</span></h1>'; } ?>
        <form method="POST" class="w-full flex justify-end pt-6">
            <button id="send" type="submit" class="bg-red-600 px-10 py-4 rounded-full font-bold text-lg transition-transform hover:scale-[1.02] text-white hover:bg-red-500">Log out</button>
        </from>
    </div>
    <div class="w-80 h-80 rounded-full bg-[#C37A67] opacity-25 fixed z-[-9999] -bottom-3 -left-3"></div>
    <div class="w-60 h-60 rounded-full bg-[#A4882C] opacity-25 fixed z-[-9999] -top-5 -right-3"></div>
    <div class="w-60 h-60 rounded-full bg-[#9CAF88] opacity-25 fixed z-[-9999] bottom-3 -right-6"></div>
    <div class="w-40 h-40 rounded-full bg-[#7DF9FF] opacity-25 fixed z-[-9999] left-[40%]"></div>
    <div class="w-60 h-60 rounded-full bg-[#718C9E] opacity-25 fixed z-[-9999] -top-10 -left-3"></div>
</div>