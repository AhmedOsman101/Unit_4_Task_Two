<?php

namespace App\Livewire;

use Livewire\Component;

class TeamEventDetails extends Component {
    public $event;
    public function render() {
        return view('livewire.team-event-details');
    }
}
