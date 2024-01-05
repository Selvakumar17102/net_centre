<?php

namespace App\Http\Livewire\Customer;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Customertickets;
use Auth;
use Request;

class Viewcustomerticket extends Component
{
    use WithFileUploads;
        
    public $ticketview,$description,$newattachment,$attachumentfile,$fetchticket;

    public function Submitnewcmd($id){

        $attachumentfile = $this->attachumentfile->store('customerticket','public');  
        // dd( $attachumentfile);
        $updateticket = Customertickets::WHERE('id',$id)->first();
        $updateticket->file = $attachumentfile;
        $updateticket->description = $this->description;
        $updateticket->save();
        return redirect()->route('customer.ticket');

    }

    public function Resolveissue($id){

        $updateticket = Customertickets::WHERE('id',$id)->first();
        $updateticket->ticket_status = '0';
        $updateticket->update();
        return redirect()->route('customer.ticket');

    }

    public function render()
    {

        $this->fetchticket = Customertickets::WHERE('id',Request::segment('3'))->first();
        return view('livewire.customer.viewcustomerticket');
    }
}
