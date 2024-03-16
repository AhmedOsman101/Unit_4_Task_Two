<?php

namespace App\Livewire;

use Livewire\Component;

class EventDetails extends Component {
    public $event;
    public function render() {
        return view('livewire.event-details');
    }
}
