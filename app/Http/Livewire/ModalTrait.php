<?php

namespace App\Http\Livewire;

trait ModalTrait
{
    public bool $isOpen = false;

    public function showModal():void
    {
        $this->isOpen = true;
    }

    public function hideModal():void
    {
        $this->isOpen = false;
    }

}
