<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\AdminTickets;

use Request;

class ViewTicket extends Component
{
    use WithFileUploads;
    public $fetchticket,$newattachment,$newdescription,$solveticket,$updateticket;

    public function solved($id){
        $this->solveticket = AdminTickets::WHERE('id',$id)->first();
        $this->solveticket->ticket_status = "0";
        $this->solveticket->update();
        return redirect()->route('admin.ticket');
    }

    public function update($id){

        $this->validate([
            'newattachment' => 'required',
            'newdescription' => 'required',
        ]);

        if($this->newattachment != NULL){
            $this->attachmentpath = $this->newattachment->store('Adminticket','public');  
            $this->updateticket = AdminTickets::WHERE('id',$id)->first();
            $this->updateticket->attachment = "storage/".$this->attachmentpath;
            $this->updateticket->description = $this->newdescription;
            $this->updateticket->update();
            return redirect()->route('admin.ticket');
        }
    }
    public function mount()
    {
        $this->fetchticket = AdminTickets::WHERE('id',Request::segment('3'))->first();
        
        return view('livewire.admin.view-ticket');
    }
}
