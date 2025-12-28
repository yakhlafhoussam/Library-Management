<header class="w-full h-[10%] flex items-center justify-between px-10 z-[9999] fixed bg-[#fcfbf8]">
    <a class="w-1/4 flex gap-1" href="/">
        <img class="w-64" src="assets/img/name.png" alt="">
    </a>
    <div class="w-1/2 h-full flex justify-around items-center">
        <a id="home" class="font-inter font-bold text-xl transition-transform <?php if ($page == "/") { echo "border-b-2 text-[#36454F]"; } else { echo "hover:scale-105 text-[#9CAF88]"; } ?>" href="/">Home</a>
        <a id="explore" class="font-inter font-bold text-xl transition-transform <?php if ($page == "/explore") { echo "border-b-2 text-[#36454F]"; } else { echo "hover:scale-105 text-[#9CAF88]"; } ?>" href="explore">Explore</a>
        <?php if (isset($_SESSION['role'])) { if ($_SESSION['role'] == 'admin') { echo "<a id='newbook' class='font-inter font-bold text-xl transition-transform hover:scale-105 text-[#9CAF88]' href='newbook'>Add Books</a>"; } } ?>
    </div>
    <div class="h-full w-1/4 flex justify-end items-center gap-2">
        <?php
        if (isset($_SESSION['id'])) {
            echo '<a href="profile" class="bg-[#C37A67] py-3 w-32 text-center rounded-full font-inter font-bold text-xl transition-transform hover:scale-[1.02] text-white hover:bg-[#9CAF88]">Profile</a>
                <a href="borrow" class="py-3 w-32 text-center rounded-full font-inter font-bold text-xl transition-transform hover:scale-[1.02] border border-solid border-[#C37A67] text-[#C37A67] hover:bg-[#f1f1f1]">Borrows</a>';
        } else {
            echo '<a href="login" class="bg-[#C37A67] py-3 w-32 text-center rounded-full font-inter font-bold text-xl transition-transform hover:scale-[1.02] text-white hover:bg-[#9CAF88]">Log in</a>
                <a href="signup" class="py-3 w-32 text-center rounded-full font-inter font-bold text-xl transition-transform hover:scale-[1.02] border border-solid border-[#C37A67] text-[#C37A67] hover:bg-[#f1f1f1]">Sign UP</a>';
        }
         ?>
        </div>
</header>
<div class="w-full h-[10%]"></div>
