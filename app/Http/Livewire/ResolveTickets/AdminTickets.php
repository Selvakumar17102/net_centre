<?php

namespace App\Http\Livewire\ResolveTickets;

use Livewire\Component;

use App\Models\AdminTickets as Admintic;

class AdminTickets extends Component
{
    public  $adminticketlist;
    public function render()
    {
        $this->adminticketlist = Admintic::all();
        return view('livewire.resolve-tickets.admin-tickets');
    }
}
