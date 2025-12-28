<div class="w-screen h-full flex flex-col justify-center items-center gap-10 relative">
    <a class="hidden" id="tologin" href="login"></a>
    <div id="toast" class="flex gap-2 bg-green-600 text-white px-4 py-3 rounded-lg absolute top-10 -left-80">
        <span class="font-semibold">Success:</span>
        <h1>Account created successfully!</h1>
    </div>
    <div id="toast0" class="flex gap-2 bg-red-600 text-white px-4 py-3 rounded-lg absolute top-10 -left-80">
        <span class="font-semibold">Error:</span>
        <h1 id="error"><?php
            if ($errormsg) {
                echo $errormsg;
            }
            ?></h1>
    </div>
    <div class="w-1/2 px-4 py-8 bg-[#ffffdc] rounded-3xl flex flex-col justify-center items-center gap-10">
        <h1 class="font-inter font-bold text-5xl text-[#C37A67]">Sign UP</h1>
        <form method="POST" class="w-11/12 flex flex-col justify-center items-center gap-8">
            <div class="w-11/12 h-16 flex justify-center">
                <input class="trunoff focus:outline-0 rounded-full w-full h-full px-8 border border-solid" type="text" name="first" value='<?php echo $first ?>' placeholder="Firstname...">
            </div>
            <div class="w-11/12 h-16 flex justify-center">
                <input class="trunoff focus:outline-0 rounded-full w-full h-full px-8 border border-solid" type="text" name="last" value='<?php echo $last ?>' placeholder="Lastname...">
            </div>
            <div class="w-11/12 h-16 flex justify-center">
                <select class="trunoff focus:outline-0 rounded-full w-full h-full px-8 border border-solid" name="gender">
                    <option value="L" <?php if ($gender == "L") { echo 'selected'; } ?>>Gender</option>
                    <option value="M" <?php if ($gender == "M") { echo 'selected'; } ?>>Male</option>
                    <option value="F" <?php if ($gender == "F") { echo 'selected'; } ?>>Female</option>
                </select>
            </div>
            <div class="w-11/12 h-16 flex justify-center">
                <input class="trunoff focus:outline-0 rounded-full w-full h-full px-8 border border-solid" type="text" name="email" value='<?php echo $email ?>' placeholder="Your Email...">
            </div>
            <div class="w-11/12 h-16 flex justify-center">
                <input class="trunoff focus:outline-0 rounded-full w-full h-full px-8 border border-solid" type="password" name="password" value='<?php echo $password ?>' placeholder="Password...">
            </div>
            <button id="send" type="submit" class="bg-[#C37A67] px-20 py-5 rounded-full font-inter font-bold text-xl text-white hover:bg-[#9CAF88]">Register</button>
        </form>
    </div>
    <div class="w-80 h-80 rounded-full bg-[#C37A67] opacity-25 fixed z-[-9999] -bottom-3 -left-3"></div>
    <div class="w-60 h-60 rounded-full bg-[#A4882C] opacity-25 fixed z-[-9999] -top-5 -right-3"></div>
    <div class="w-60 h-60 rounded-full bg-[#9CAF88] opacity-25 fixed z-[-9999] bottom-3 -right-6"></div>
    <div class="w-40 h-40 rounded-full bg-[#7DF9FF] opacity-25 fixed z-[-9999] left-[40%]"></div>
    <div class="w-60 h-60 rounded-full bg-[#718C9E] opacity-25 fixed z-[-9999] -top-10 -left-3"></div>
</div>