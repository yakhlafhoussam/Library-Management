<header class="w-full h-[10%] flex items-center justify-between px-10 z-[9999] fixed bg-[#fcfbf8]">
    <a class="flex gap-1" href="KEO">
        <img class="w-64" src="assets/img/name.png" alt="">
    </a>
    <div class="w-1/2 h-full flex justify-around items-center">
        <a id="home" class="font-inter font-bold text-xl <?php if ($page == "home") { echo "border-b-2 text-[#36454F]"; } else { echo "hover:scale-105 text-[#9CAF88]"; } ?>" href="/">Home</a>
        <a id="explore" class="font-inter font-bold text-xl <?php if ($page == "/explore") { echo "border-b-2 text-[#36454F]"; } else { echo "hover:scale-105 text-[#9CAF88]"; } ?>" href="explore">Explore</a>
        <a id="book" class="font-inter font-bold text-xl <?php if ($page == "/book") { echo "border-b-2 text-[#36454F]"; } else { echo "hover:scale-105 text-[#9CAF88]"; } ?>" href="book">Authors / Books</a>
        <a id="about" class="font-inter font-bold text-xl <?php if ($page == "/about") { echo "border-b-2 text-[#36454F]"; } else { echo "hover:scale-105 text-[#9CAF88]"; } ?>" href="about">About</a>
        <a id="contact" class="font-inter font-bold text-xl <?php if ($page == "/contact") { echo "border-b-2 text-[#36454F]"; } else { echo "hover:scale-105 text-[#9CAF88]"; } ?>" href="contact">Contact</a>
    </div>
</header>
<div class="w-full h-[10%]"></div>