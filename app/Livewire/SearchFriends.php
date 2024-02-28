<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchFriends extends Component
{
    public $search = '';
    public function render()
    {
        return view('livewire.search-friends',['users'=>User::where('idU', 'like', '%' . $this->search. '%')->get()

        ]);

    }
}
