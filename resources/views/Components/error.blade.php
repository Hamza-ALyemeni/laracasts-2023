@props(['name'])

@error($name)
    <p class="text-red-500 text-sm mt-1 font-semibold">{{ $message }}</p>
@enderror