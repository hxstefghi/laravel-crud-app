<!-- Sidebar -->
<aside class="w-72 flex flex-col justify-between p-4 border-r border-gray-800">
    <div>
        <!-- Logo -->
        <div class="mb-8 flex items-start">
            <span class="text-3xl font-bold">Logo</span>
        </div>
        <div class="flex flex-col justify-between">
            <!-- Nav -->
            <nav class="flex flex-col space-y-2">
                <a href="#" class="flex items-center space-x-4 px-4 py-2 rounded-full bg-gray-900 font-bold">
                    <!-- Replace with icon -->

                    <span>Home</span>
                </a>
                <a href="#" class="flex items-center space-x-4 px-4 py-2 rounded-full hover:bg-gray-800">

                    <span>Profile</span>
                </a>
                <!-- ... -->
            </nav>
            <!-- Post Button -->
            <div class="flex flex-col">
                <button onClick="openModal()"
                    class="w-full mt-8 py-3 rounded-full bg-white text-black font-bold text-lg hover:bg-gray-200 transition">
                    Post
                </button>

                <button
                    class="w-full mt-3 py-3 rounded-full bg-red-500 text-white font-bold text-lg hover:bg-red-400 transition">
                    Logout
                </button>
            </div>
        </div>
    </div>
    <!-- User Profile -->
    <div class="flex items-center space-x-3 p-3 rounded-full hover:bg-gray-800 cursor-pointer">
        <div class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center text-lg font-bold">
            C
        </div>
        <div>
            <div class="font-bold">Christian Catuday</div>
            <div class="text-gray-400 text-sm">@hxstee</div>
        </div>
    </div>
</aside>
