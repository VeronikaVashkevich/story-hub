<div class="left-menu flex flex-col text-xl bg-gray-100 px-6 py-2 rounded-md pb-2 h-max">
    @foreach($currentMenu->getItems() as $item)
        <div>
            <a href="{{ route($item->route) }}"
               class="{{ $item->isActive() ? 'font-semibold' : '' }} flex justify-start"
            >
                <img src="{{ Vite::asset('resources/images/icons/' . $item->icon . '.svg') }}"
                     alt="{{ $item->icon }}"
                     class="mr-2"
                />
                {{ $item->title }}
            </a>
        </div>
    @endforeach
</div>
