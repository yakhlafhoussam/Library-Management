<div class="w-screen h-full flex flex-col justify-center items-center gap-10 relative">
    <div class="w-1/2 px-4 py-8 bg-[#ffffdc] rounded-3xl flex flex-col justify-center items-center gap-10">
        <h1 class="font-inter font-bold text-5xl text-[#C37A67]">Log in</h1>
        <form method="POST" class="w-11/12 flex flex-col justify-center items-center gap-8">
            <div class="w-11/12 h-16 flex justify-center">
                <input class="focus:outline-0 trunoff rounded-full w-full h-full px-8 border border-solid" type="text" name="email" value='' placeholder="Email...">
            </div>
            <div class="w-11/12 h-16 flex justify-center">
                <input class="focus:outline-0 trunoff rounded-full w-full h-full px-8 border border-solid" type="password" name="password" value='' placeholder="Password...">
            </div>
            <div class="flex gap-2">
                <button id="send" type="submit" class="bg-[#C37A67] w-32 h-16 rounded-full font-inter font-bold text-xl text-white hover:bg-[#9CAF88]">Log in</button>
                <a href="signup" class="h-16 w-32 text-center rounded-full font-inter font-bold text-xl flex items-center justify-center border border-solid border-[#C37A67] text-[#C37A67] hover:bg-[#f5f5cf]">Sign UP</a>
            </div>
        </form>
    </div>
    <div class="w-80 h-80 rounded-full bg-[#C37A67] opacity-25 fixed z-[-9999] -bottom-3 -left-3"></div>
    <div class="w-60 h-60 rounded-full bg-[#A4882C] opacity-25 fixed z-[-9999] -top-5 -right-3"></div>
    <div class="w-60 h-60 rounded-full bg-[#9CAF88] opacity-25 fixed z-[-9999] bottom-3 -right-6"></div>
    <div class="w-40 h-40 rounded-full bg-[#7DF9FF] opacity-25 fixed z-[-9999] left-[40%]"></div>
    <div class="w-60 h-60 rounded-full bg-[#718C9E] opacity-25 fixed z-[-9999] -top-10 -left-3"></div>
</div>