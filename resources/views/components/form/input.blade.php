<label for="{{ $title }}" class="uppercase text-sm font-semibold">{{ $title }}</label>

<input {{ $attributes->class(['border border-gray-400 p-2'])->merge([
    'type' => 'text',
]) }}
    id="{{ $title }}">

@error($name)
    <span class="text-red-400">{{ $message }}</span>
@enderror
