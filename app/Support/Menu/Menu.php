<?php

namespace App\Support\Menu;

use Illuminate\Support\Collection;

class Menu
{
    /** @var Collection<int, MenuItem> */
    private Collection $items;

    public function __construct()
    {
        $this->items = collect();
    }

    public function add(MenuItem $item): self
    {
        $this->items->push($item);

        return $this;
    }

    /**
     * @return Collection<int, MenuItem>
     */
    public function getItems()
    {
        return $this->items->filter(fn (MenuItem $item) => $item->isVisible());
    }

    public function hasVisibleItems(): bool
    {
        return $this->getItems()->isNotEmpty();
    }
}
