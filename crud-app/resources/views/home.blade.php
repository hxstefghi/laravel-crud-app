<!DOCTYPE html>
<html lang="en">
<x-head />

<body class="bg-black text-white grid-bg">
    <div class="flex justify-center min-h-screen">
        <div class="flex w-full max-w-6xl">

            {{-- Sidebar --}}
            <x-sidebar />

            <!-- Main Content -->
            <main class="flex-1 flex justify-center">
                <div class="w-full max-w-2xl px-4 py-8 space-y-8">
                    {{-- Post --}}
                    <div class="flex items-start space-x-3">
                        <div
                            class="w-15 h-10 rounded-full bg-gray-700 flex items-center justify-center text-lg font-bold">
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
                            class="w-15 h-10 rounded-full bg-gray-700 flex items-center justify-center text-lg font-bold">
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

    {{-- Post Modal --}}
    <x-post-modal />

    <script>
        function openModal() {
            document.getElementById("postModal").classList.remove("hidden");
        }

        function closeModal() {
            document.getElementById("postModal").classList.add("hidden");
        }
    </script>
</body>

</html>
