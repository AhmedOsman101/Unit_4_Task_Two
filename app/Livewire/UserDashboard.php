<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class UserDashboard extends Component {

    public $users;
    public function render() {
        $this->users = User::all();
        return view('livewire.user-dashboard', ['users' => $this->users]);
    }
}
