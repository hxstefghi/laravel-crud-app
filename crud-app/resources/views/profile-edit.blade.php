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
                    <a href="{{ route('user.show', $user->id) }}" class="text-sm text-gray-500">
                        < Back to Profile</a>
                            <div class="flex items-center space-x-5">
                                <div
                                    class="w-40 h-40 rounded-full bg-gray-700 flex items-center justify-center text-5xl font-bold">
                                    C
                                </div>
                                <div class="flex flex-col">

                                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                                        <div class="flex items-start flex-col">
                                            @csrf
                                            @method('PUT')
                                            <x-input-field type="text" name="name" label="Name"
                                                :value="old('name', $user->name)" />
                                            <p class="text-gray-400 mt-2">@hxstee</p>
                                            <p>{{ $user->email }}</p>
                                            <button type="submit"
                                                class="py-2 px-3 font-bold bg-white text-black rounded-full mt-3 cursor-pointer">Save
                                                Profile</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

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
                                                <p class="text-gray-400 text-sm">
                                                    {{ $post->updated_at->diffForHumans() }}</p>
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
