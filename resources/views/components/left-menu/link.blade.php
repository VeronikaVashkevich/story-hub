<a href="{{ route($item->route) }}"
   class="{{ $item->isActive() ? 'font-semibold' : '' }} flex justify-start"
>
    {{ $slot }}
    {{ $item->title }}
</a>
