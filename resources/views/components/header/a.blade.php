@php
    $link = route($route)
@endphp

<a {{ $attributes->class([
    'hover:text-gray-800',
    $link == url()->current() ? 'text-gray-800' : 'text-gray-400'
])->merge([
    'href' => $link
]) }}>{{ $slot }} </a>
