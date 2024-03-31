<?php

namespace App\Livewire;

use Livewire\Component;

class IndividualEventDetails extends Component {
    public $event;
    public function render() {
        return view('livewire.individual-event-details');
    }
}
