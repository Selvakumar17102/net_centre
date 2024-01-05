<?php

namespace App\Http\Livewire\ResolveTickets;

use Livewire\Component;
use App\Models\Customertickets as Customerticket;

class CustomerTickets extends Component
{
    public $custicketlist;
    public function render()
    {
        $this->custicketlist = Customerticket::all();
        // dd($this->custicketlist);
        return view('livewire.resolve-tickets.customer-tickets');
    }
}
