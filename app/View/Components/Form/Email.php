<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Email extends Component
{
    public function __construct(
        public string $name,
        public string $id,
        public string $label,
        public ?string $value = '',
    ) {}

    public function render(): View|Closure|string
    {
        return view('components.form.email');
    }
}
