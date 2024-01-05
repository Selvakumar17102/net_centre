<?php

namespace App\Http\Livewire\ResolveTickets;

use Livewire\Component;
use App\Models\AdminTickets;

use Livewire\WithFileUploads;
use Request;

class ViewTickets extends Component
{
    use WithFileUploads;
    

    public $fetchticket,$newattachment,$newdescription,$updateticket,$attachmentpath;
    public $solveticket;

    public function solved($id){
        $this->solveticket = AdminTickets::WHERE('id',$id)->first();
        $this->solveticket->ticket_status = "0";
        $this->solveticket->update();
        return redirect()->route('admin_ticket_resolve');
    }

    public function update($id){

        $this->validate([
            'newattachment' => 'required',
            'newdescription' => 'required',
        ]);

        // dd($id);
            $this->attachmentpath = $this->newattachment->store('Adminticket','public');
            $this->updateticket = AdminTickets::WHERE('id',$id)->first();
            $this->updateticket->attachment = "storage/".$this->attachmentpath;
            $this->updateticket->description = $this->newdescription;
            $this->updateticket->update();
            return redirect()->route('admin_ticket_resolve');
    }

    public function mount()
    {
        $this->fetchticket = AdminTickets::WHERE('id',Request::segment('3'))->first();
        return view('livewire.resolve-tickets.view-tickets');
    }
}
