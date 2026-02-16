<!DOCTYPE html>
<html lang="en">
<x-head />

<body class="bg-black text-white grid-bg">
    <div class="flex justify-center min-h-screen">
        <div class="flex w-full max-w-6xl">
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
                            <a href="#"
                                class="flex items-center space-x-4 px-4 py-2 rounded-full bg-gray-900 font-bold">
                                <!-- Replace with icon -->

                                <span>Home</span>
                            </a>
                            <a href="#"
                                class="flex items-center space-x-4 px-4 py-2 rounded-full hover:bg-gray-800">

                                <span>Profile</span>
                            </a>
                            <!-- ... -->
                        </nav>
                        <!-- Post Button -->
                        <div class="flex flex-col">
                            <button
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
            <!-- Main Content -->
            <main class="flex-1 flex justify-center">
                <div class="w-full max-w-xl px-4 py-8 space-y-8">
                    {{-- Main Content --}}


                    {{-- Post --}}
                    <div class="flex items-start space-x-3">
                        <div
                            class="w-20 h-10 rounded-full bg-gray-700 flex items-center justify-center text-lg font-bold">
                            C
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center space-x-2">
                                <p class="font-bold">Christian Catuday</p>
                                <p class="text-gray-400">@hxstee</p>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aliquid ipsum sint quis
                                    repellat blanditiis soluta ex deleniti impedit illo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div
                            class="w-20 h-10 rounded-full bg-gray-700 flex items-center justify-center text-lg font-bold">
                            C
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center space-x-2">
                                <p class="font-bold">Christian Catuday</p>
                                <p class="text-gray-400">@hxstee</p>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aliquid ipsum sint quis
                                    repellat blanditiis soluta ex deleniti impedit illo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
