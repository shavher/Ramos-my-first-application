@props(['active' => false])
<a {{ $attributes }}
class="{{ $active ? ' bg-purple-700 text-white' : ' text-purple-700 font-medium hover:bg-purple-700
hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
aria-current="{{ $active ? 'page' : 'false' }}"
>{{ $slot }}</a>