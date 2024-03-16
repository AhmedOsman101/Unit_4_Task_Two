<?php

namespace App\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $event;
    public function render()
    {
        return view('livewire.card');
    }
}
