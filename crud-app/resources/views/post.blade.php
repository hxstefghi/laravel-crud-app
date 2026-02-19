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
                <div class="w-full max-w-2xl px-4 py-8">
                    {{-- Post --}}
                    <div class="flex space-x-3 items-center">
                        <a href="{{ route('home') }}" class="text-gray-400 text-sm">
                            < Back</a>
                                <h3 class="text-white font-bold text-2xl">Post</h3>
                    </div>
                    <div class="flex items-start space-x-3 mt-4">
                        <div
                            class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center text-lg font-bold">
                            C
                        </div>
                        <div class="flex flex-col">

                            <div class="flex items-center space-x-2">
                                <p class="font-bold">{{ $post->user->name }}</p>
                                <p class="text-gray-400">@hxstee</p>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm">
                                    {{ $post->updated_at->diffForHumans() }}
                                </p>

                                <div class="flex space-x-3 items-center mt-2">
                                    <a href="{{ route('post.edit', $post->id) }}"
                                        class="text-sm text-green-500">Edit</a>
                                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="text-sm text-red-500">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="mt-4">{{ $post->body }}</p>
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
