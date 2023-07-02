<?php

namespace App\Http\Livewire\Customer;

use App\Models\Commande;
use Livewire\Component;

class CustomerCommandeComponent extends Component
{
    public function render()
    {
        $commandes = Commande::paginate(15);
        return view('livewire.customer.customer-commande-component',['commandes'=> $commandes])->layout('layouts.base');
    }
}
