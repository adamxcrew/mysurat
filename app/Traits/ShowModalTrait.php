<?php
namespace App\Traits;
trait ShowModalTrait
{
    public function showModal():void
    {
        $this->isOpen = true;
    }

    public function hideModal():void
    {
        $this->isOpen = false;
    }
}
