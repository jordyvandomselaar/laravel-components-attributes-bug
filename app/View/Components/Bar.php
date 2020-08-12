<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Bar extends Component
{
    private string $src;

    public function __construct(string $src)
    {
        $this->src = $src;
    }

    public function render()
    {
        return view('components.bar');
    }
}
