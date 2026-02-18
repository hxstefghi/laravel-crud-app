@props(['name', 'textarea', 'value' => ''])

<div class="flex flex-col space-y-3 w-full">
    <textarea class="w-full focus:outline-none p-2 mb-4" rows="4" name="{{ $name }}"
        placeholder="{{ $textarea }}">{{ $value }}</textarea>
    @error($name)
        <p class="text-red-500 ">{{ $message }}</p>
    @enderror
</div>
