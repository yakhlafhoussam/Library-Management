<div class="w-screen h-full flex flex-col items-center py-10">
    <h1 class="font-bold text-5xl text-[#C37A67]">Library</h1>

    <div class="w-11/12 flex flex-wrap justify-center gap-4 p-5 my-8">
        <?php 
        
        for ($i=0; $i < count($stackBook); $i++) { 
            echo '
            <form method="POST">
                <input class="hidden" name="chose" type="text" value="' . $stackBook[$i]['id'] . '">
                <button type="submit">
                    <img class="h-80 w-56 border-8 border-solid border-gray-500 hover:scale-95 transition-transform cursor-pointer" src="' . $stackBook[$i]['cover'] . '" alt="">
                </button>
            </form>
            ';
        }

        ?>
    </div>
    
    <div class="w-80 h-80 rounded-full bg-[#C37A67] opacity-25 fixed z-[-9999] -bottom-3 -left-3"></div>
    <div class="w-60 h-60 rounded-full bg-[#A4882C] opacity-25 fixed z-[-9999] -top-5 -right-3"></div>
    <div class="w-60 h-60 rounded-full bg-[#9CAF88] opacity-25 fixed z-[-9999] bottom-3 -right-6"></div>
    <div class="w-40 h-40 rounded-full bg-[#7DF9FF] opacity-25 fixed z-[-9999] left-[40%]"></div>
    <div class="w-60 h-60 rounded-full bg-[#718C9E] opacity-25 fixed z-[-9999] -top-10 -left-3"></div>
</div>

