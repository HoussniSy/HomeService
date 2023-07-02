<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceProvider;
use Livewire\Component;

class AdminServiceProvidersComponent extends Component
{
    public function render()
    {
        $service_providers = ServiceProvider::paginate(12);
        return view('livewire.admin.admin-service-providers-component',['service_providers' => $service_providers])->layout('layouts.base');
    }
}
