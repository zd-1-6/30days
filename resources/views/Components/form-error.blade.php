@props(['name'])

@error($name)
    <p class="text-xs text-blue-500 font-semibold mt-1">{{ $message }}</p>
@enderror