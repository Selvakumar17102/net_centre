<?php

namespace App\Http\Livewire\ResolveTickets;

use Livewire\Component;
use App\Models\Customertickets;
use Livewire\WithFileUploads;
use Request;

class ViewCustomerTicket extends Component
{

    use WithFileUploads;

    public $fetchticket,$solveticket,$attachmentpath,$newattachment,$newdescription,$updateticket;

    public function solved($id){
        $this->solveticket = Customertickets::WHERE('id',$id)->first();
        $this->solveticket->ticket_status = "0";
        $this->solveticket->update();
        return redirect()->route('customer_ticket_resolve');
    }

    public function update($id){

        $this->validate([
            'newattachment' => 'required',
            'newdescription' => 'required',
        ]);

            $this->attachmentpath = $this->newattachment->store('Adminticket','public');
            $this->updateticket = Customertickets::WHERE('id',$id)->first();
            $this->updateticket->file = "storage/".$this->attachmentpath;
            $this->updateticket->description = $this->newdescription;
            $this->updateticket->update();
            return redirect()->route('customer_ticket_resolve');
    }

    public function mount()
    {
        $this->fetchticket = Customertickets::WHERE('id',Request::segment('3'))->first();
        return view('livewire.resolve-tickets.view-customer-ticket');
    }
}
