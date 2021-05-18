<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ConfirmComponent extends Component
{
    public function render()
    {
        return view('livewire.confirm-component')->layout('layouts.base');
    }
}
