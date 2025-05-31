<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    public function __construct(
        public string $id,
        public string $name,
        public string $label,
        public bool $checked = false,
    ) {}

    public function render(): View|Closure|string
    {
        return view('components.form.checkbox');
    }
}
