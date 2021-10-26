<?php

namespace App\View\Components\tabel;

use Illuminate\View\Component;

class tombol extends Component
{
    public $links;
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($links,$type)
    {
       $this->links = $links;
       $this->type = $type;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tabel.tombol');
    }
}
