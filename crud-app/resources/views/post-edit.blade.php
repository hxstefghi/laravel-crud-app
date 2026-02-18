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
                        <a href="{{ route('post.show', $post->id) }}" class="text-gray-400 text-sm">
                            < Back</a>
                                <h3 class="text-white font-bold text-2xl">Edit Post</h3>
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
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('post.update', $post->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <x-textarea-field name="body" textarea="Body" :value="old('body', $post->body)" />

                        <button class="px-5 py-2 rounded-full font-bold bg-white text-black cursor-pointer mt-3">Edit
                            Post</button>
                    </form>
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
