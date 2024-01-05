<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithFileUploads;
use Livewire\Component;
use Haruncpi\LaravelIdGenerator\IdGenerator;

use App\Models\AdminTickets;
use App\Models\CompanyList;
use App\Models\Subject;
use Auth;
use Request;

class Ticket extends Component
{
    use WithFileUploads;
    public $subjectlist,$companylist,$company,$subject,$attachment,$description,$adminticketlist,$adminticketedit;

    public function ticketsubmit(){
        $this->validate([
            'company' => 'required',
            'subject' => 'required',
            'attachment' => 'required',
            'description' => 'required',
        ]);
            $this->attachmentpath= $this->attachment->store('Adminticket','public');

            $id = IdGenerator::generate(['table' => 'admin_tickets','field'=>'ticket_id', 'length' => 8, 'prefix' =>"#AT-"]);

            // dd($id."-".date('ym'));
            $this->addticket = new AdminTickets;
            $this->addticket->admin_id  = Auth::user()->admin_id;
            $this->addticket->ticket_id =$id."-".date('ym');
            $this->addticket->company = $this->company;
            $this->addticket->subject = $this->subject;
            $this->addticket->attachment ="storage/".$this->attachmentpath;
            $this->addticket->description = $this->description;
            $this->addticket->save();

            return redirect()->route('admin.ticket');
    }
    public function render()
    {
        $this->companylist = CompanyList::all();
        $this->subjectlist = Subject::all();
        $this->adminticketlist = AdminTickets::WHERE('admin_id',Auth::user()->admin_id)->get();
        
        return view('livewire.admin.ticket');
    }
}
