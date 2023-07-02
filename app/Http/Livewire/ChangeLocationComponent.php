<?php

namespace App\Http\Livewire;

use App\Models\Location;
use Livewire\Component;

class ChangeLocationComponent extends Component
{
    public $nom_client;
    public $email;
    public $route;
    public $telephone;
    public $prix;
    public $zipcode;
    public $travail;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'nom_client' => 'required',
            'email' => 'required',
            'route' => 'required',
            'telephone' => 'required',
            'prix' => 'required',
            'zipcode' => 'required',
            'travail' => 'required'
        ]);
    }

    public function sendMessage()
    {
        $this->validate([
            'nom_client' => 'required',
            'email' => 'required',
            'route' => 'required',
            'telephone' => 'required',
            'prix' => 'required',
            'zipcode' => 'required',
            'travail' => 'required'
        ]);

        $location = new Location();
        $location-> nom_client = $this->nom_client;
        $location-> email = $this->email;
        $location-> route = $this->route;
        $location-> telephone = $this->telephone;
        $location-> prix = $this->prix;
        $location-> zipcode = $this->zipcode;
        $location-> travail = $this->travail;
        $location->save();
        session()->flash('message','Location has been changed');
        $this->emitTo('location-component','refreshComponent');
    }

    public function render()
    {
        return view('livewire.change-location-component')->layout('layouts.base');
    }
}
