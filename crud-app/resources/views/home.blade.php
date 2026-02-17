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
                    @foreach ($posts as $post)
                        <div class="flex items-start space-x-3">
                            <div
                                class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center text-lg font-bold">
                                C
                            </div>
                            <div class="flex flex-col">
                                <a href="{{ route('post.show', $post->id) }}">
                                    <div class="flex items-center space-x-2">
                                        <p class="font-bold">{{ $post->user->name }}</p>
                                        <p class="text-gray-400">@hxstee</p>
                                    </div>
                                    <div>
                                        <p class="text-gray-400 text-sm">{{ $post->updated_at->diffForHumans() }}</p>
                                        <p>{{ $post->body }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
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
