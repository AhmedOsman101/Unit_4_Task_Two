<?php

namespace App\Livewire;

use Livewire\Component;

class CheckBox extends Component {
    public $label;
    public function render() {
        return view('livewire.check-box');
    }
}
