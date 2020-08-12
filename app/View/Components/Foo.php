<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Foo extends Component
{
    private string $src;

    public function __construct(string $src)
    {
        $this->src = $src;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.foo');
    }
}
