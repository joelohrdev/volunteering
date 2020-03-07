<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;
use Livewire\WithPagination;

class Parents extends Component
{
    public function render()
    {
        return view('livewire.parents', [
            'parents' => User::paginate(10),
        ]);
    }
}
