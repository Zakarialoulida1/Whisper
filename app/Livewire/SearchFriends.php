<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchFriends extends Component
{
    public $search = '';

    public function render()
    {
        // Vérifie si une recherche a été effectuée
        if ($this->search !== '') {
            // Si une recherche a été effectuée, récupère les utilisateurs filtrés
            $users = User::where('idU', 'like', '%' . $this->search. '%')->get();
        } else {
            // Sinon, récupère tous les utilisateurs
            $users = User::all();
        }

        // Rend la vue avec les utilisateurs récupérés
        return view('livewire.search-friends', ['users' => $users]);
    }
}

