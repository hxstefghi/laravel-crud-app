<input class="py-4 px-3 outline-1 outline-gray-500 rounded-md" type="{{ $type }}" name="{{ $name }}"
    placeholder="{{ $label }}">

@error($name)
    <p class="text-red-500">{{ $message }}</p>
@enderror
