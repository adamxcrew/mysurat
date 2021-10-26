<?php

namespace App\Http\Livewire;

use App\Models\Faximile;
use Livewire\Component;
use Livewire\WithPagination;

class FaximileLivewire extends Component
{
    use WithPagination, ModalTrait;
    public Faximile $faximile;
    public bool $isOpen = false;

    public function mount(){
        $this->faximile = new Faximile();
    }

    public function showModal():void
    {
        $this->isOpen = true;
    }

    public function hideModal():void
    {
        $this->isOpen = false;
    }



    public function render()
    {
        return view('livewire.faximile-livewire',[
            'faks'=> Faximile::with('users')->paginate(5),
        ]);
    }

    public function edit($id)
    {
        $this->showModal();
    }
}
