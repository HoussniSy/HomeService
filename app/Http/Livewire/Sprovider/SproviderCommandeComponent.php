<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\Commande;
use Livewire\Component;

class SproviderCommandeComponent extends Component
{
    public $nom;
    public $telephone;
    public $date;
    public $statut;
    public $id_service;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'nom' => 'required',
            'telephone' => 'required',
            'date' => 'required',
            'statut' => 'required',
            'id_service' => 'required'
        ]);
    }

    public function sendMessage()
    {
        $this->validate([
            'nom' => 'required',
            'telephone' => 'required',
            'date' => 'required',
            'statut' => 'required',
            'id_service' => 'required'
        ]);

        $commande = new Commande();
        $commande->nom = $this->nom;
        $commande->telephone = $this->telephone;
        $commande->date = $this->date;
        $commande->statut = $this->statut;
        $commande->id_service = $this->id_service;
        $commande->save();
        session()->flash('message','Your commande has been submitted successfully!');
    }
    
    public function render()
    {
        return view('livewire.sprovider.sprovider-commande-component')->layout('layouts.base');
    }
}
