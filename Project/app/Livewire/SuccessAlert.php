<?php

namespace App\Livewire;

use Livewire\Component;

class SuccessAlert extends Component {
    public $successMessage;
    public $successText;
    public function render() {
        return view('livewire.success-alert');
    }
}
