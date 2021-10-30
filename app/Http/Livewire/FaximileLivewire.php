<?php

namespace App\Http\Livewire;

use App\Models\Faximile;
use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\ShowModalTrait;


class FaximileLivewire extends Component
{
    use WithPagination,ShowModalTrait;

    public Faximile $faximile;

    public bool $isOpen = false;
    public int $type = 1;

    public function mount(){
        $this->faximile = new Faximile();
    }

    private function tampilDelete():void
    {
        $this->type = 2;
    }

    private function hideDelete():void
    {
        $this->type = 1;
    }

    public function render()
    {
        return view('livewire.faximile-livewire',[
            'faks'=> Faximile::with('users')->paginate(5),
        ]);
    }

    public function edit($id)
    {
       $this->hideDelete();
       $this->showModal();
    }

    public function hapus($id)
    {
        $this->tampilDelete();
        $this->showModal();
    }
}
