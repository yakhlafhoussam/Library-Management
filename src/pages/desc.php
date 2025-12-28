<div class="w-screen h-full flex justify-between items-center">
    <div id="toast0" class="flex gap-2 bg-red-600 text-white px-4 py-3 rounded-lg absolute top-10 -left-80">
        <span class="font-semibold">Error:</span>
        <h1 id="error"><?php if ($errormsg) { echo $errormsg; } ?></h1>
    </div>
    <div class="w-1/2 h-full flex justify-center p-4 bg-[url('/assets/img/Hidden1.png')] bg-cover bg-center">
        <img class="w-1/2 h-full outline-[13px] outline-gray-500 outline" src="<?php echo $bookInfo['cover'] ?>" alt="">
    </div>
    <div class="w-[45%] py-16 mr-20 flex flex-col justify-center items-center gap-20 bg-[#ffffdc] rounded-3xl">
        <div class="w-full flex flex-col justify-center items-center gap-10">
            <div class="flex justify-between items-center font-bold text-start w-4/5 text-5xl text-[#C37A67]"><h1 class="w-2/6">Title</h1><h1>:</h1><h1 class="w-1/2 font-bold text-start text-3xl text-[#A4882C]"><?php echo $bookInfo['title'] ?></h1></div>
            <div class="flex justify-between items-center font-bold text-start w-4/5 text-5xl text-[#C37A67]"><h1 class="w-2/6">Author</h1><h1>:</h1><h1 class="w-1/2 font-bold text-start text-3xl text-[#A4882C]"><?php echo $bookInfo['author'] ?></h1></div>
            <div class="flex justify-between items-center font-bold text-start w-4/5 text-5xl text-[#C37A67]"><h1 class="w-2/6">Year</h1><h1>:</h1><h1 class="w-1/2 font-bold text-start text-3xl text-[#A4882C]"><?php echo $bookInfo['year'] ?></h1></div>
            <div class="flex justify-between items-center font-bold text-start w-4/5 text-5xl text-[#C37A67]"><h1 class="w-2/6">Status</h1><h1>:</h1><h1 class="w-1/2 font-bold text-start text-3xl text-[#A4882C]"><?php echo $bookInfo['status'] ?></h1></div>
        </div>
        <form class="w-full flex justify-end gap-2 px-5" method="POST">
            <input class="hidden" type="text" name="<?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { echo 'delete'; } else { echo 'borrow'; } ?>" value="<?php echo $bookInfo['id'] ?>">
            <button type="submit" class="bg-[#C37A67] w-48 py-5 rounded-full font-inter font-bold text-xl text-white hover:bg-[#9CAF88]"><?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { echo 'DELETE'; } else { echo 'Borrow NOW'; } ?></button>
        </form>
    </div>
    <div class="w-80 h-80 rounded-full bg-[#C37A67] opacity-25 fixed z-[-9999] -bottom-3 -left-3"></div>
    <div class="w-60 h-60 rounded-full bg-[#A4882C] opacity-25 fixed z-[-9999] -top-5 -right-3"></div>
    <div class="w-60 h-60 rounded-full bg-[#9CAF88] opacity-25 fixed z-[-9999] bottom-3 -right-6"></div>
    <div class="w-40 h-40 rounded-full bg-[#7DF9FF] opacity-25 fixed z-[-9999] left-[40%]"></div>
    <div class="w-60 h-60 rounded-full bg-[#718C9E] opacity-25 fixed z-[-9999] -top-10 -left-3"></div>
</div>