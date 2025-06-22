<?php

namespace App\Support\Menu;

readonly class MenuItem
{
    /**
     * @param string $title
     * @param string $route
     * @param string $icon
     * @param bool $active
     * @param bool $visible
     * @param array<int, MenuItem> $children
     */
    public function __construct(
        public string $title,
        public string $route,
        public string $icon,
        public bool $active = false,
        public bool $visible = true,
        public array $children = []
    ) {}

    public function isActive(): bool
    {
        return $this->active || collect($this->children)->contains(fn ($child) => $child->isActive());
    }

    public function isVisible(): bool
    {
        return
            $this->visible
            && (
                $this->children === []
                || collect($this->children)->contains(fn ($child) => $child->isVisible())
            );
    }
}
