<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\Location;
use Livewire\Component;

class SproviderServiceComponent extends Component
{
    public function render()
    {
        $locations = Location::paginate(15);
        return view('livewire.sprovider.sprovider-service-component',['locations' => $locations])->layout('layouts.base');
    }
}
