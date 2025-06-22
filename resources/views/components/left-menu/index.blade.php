<div class="left-menu flex flex-col text-xl bg-gray-100 px-6 py-2 rounded-md pb-2 h-max w-64 min-w-64">
    @foreach($currentMenu->getItems() as $item)
        <x-left-menu.item
            :item="$item"
        />
    @endforeach
</div>
