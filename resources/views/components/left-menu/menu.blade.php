@foreach($currentMenu->getItems() as $item)
    <a href="{{ route($item->route) }}"
       class="{{ $item->isActive() ? 'active' : '' }}">
        <i class="bi bi-{{ $item->icon }}"></i>
        {{ $item->title }}
    </a>
@endforeach
