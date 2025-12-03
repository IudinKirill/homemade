<div class="grid">
    <label for="{{ $title }}" class="uppercase text-sm font-semibold">{{ $title }}</label>

    @php
        $error = ""
    @endphp

    @error($name)
        @php
            $error = 'border-red-400';
        @endphp
    @enderror

    <input {{ $attributes->class(['border border-gray-400 p-2', "$error"])->merge([
        'type' => 'text',
        'value' => old($name) ,
    ]) }}
        id="{{ $title }}">

    @error($name)
        <span class="text-red-400">{{ $message }}</span>
    @enderror
</div>
