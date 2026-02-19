<!DOCTYPE html>
<html lang="en">
<x-head />

<body class="bg-black text-white grid-bg">
    <div class="flex justify-center min-h-screen">
        <div class="flex w-full max-w-6xl">

            {{-- Sidebar --}}
            <x-sidebar :user="auth()->user()" />

            <!-- Main Content -->
            <main class="flex-1 flex justify-center">
                <div class="w-full max-w-2xl px-4 py-8 space-y-8">
                    {{-- Post --}}
                    <div class="flex items-center space-x-5">
                        <div
                            class="w-30 h-30 rounded-full bg-gray-700 flex items-center justify-center text-5xl font-bold">
                            C
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-start flex-col space-x-2">
                                <p class="font-bold text-3xl">{{ $user->name }}</p>
                                <p class="text-gray-400">@hxstee</p>
                                <p>{{ $user->email }}</p>
                                <a href="#" class="py-2 px-3 font-bold bg-white text-black rounded-full mt-3">Edit
                                    Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    {{-- Post Modal --}}
    <x-post-modal />

    @if ($errors->any())
        <script>
            window.onload = function() {
                openModal();
            }
        </script>
    @endif

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
