<!-- Modal -->
<div id="postModal" class="fixed inset-0 flex items-start justify-center bg-white/30 bg-opacity-50 z-50 hidden">
    <div class="bg-black text-white rounded-lg mt-10 p-6 w-full max-w-xl">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Create Post</h2>
            <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
        </div>
        <form action="{{ route('post.store') }}" method="POST">
            @csrf
            <div class="flex space-x-3">
                <div class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center text-lg font-bold">
                    C
                </div>

                <x-textarea-field name="body" textarea="What's on your mind?" />
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-white text-black font-bold rounded-full">Post</button>
            </div>
        </form>
    </div>
</div>
