<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\CompanyList;
use App\Models\Subject;
use App\Models\Userticket as ticket;
use App\Models\customer;

use Livewire\WithFileUploads;
use Auth;


class Userticket extends Component
{
    use WithFileUploads;

    public $companylist,$subjectlist,$subject,$description,$attachumentfile;

    public function Userticket(){

        $randomFourDigits = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);

        $this->validate([
            'subject' => 'required',
            'description' => 'required',
        ]);
        $admin_id = customer::where('id',Auth::user()->customer_id)->first();

        // $this->attachmentpath = $this->attachumentfile->store('userticket','public');

        $addcusticket = new ticket;
        // $addcusticket->user_id  = Auth::user()->id;
        $addcusticket->admin_id  = $admin_id->admin_id;
        $addcusticket->subject = $this->subject;
        $addcusticket->ticket_id =  $randomFourDigits;
        $addcusticket->description = $this->description;
        // $addcusticket->file = "storage/".$this->attachmentpath;
        $addcusticket->save();
        dd($addcusticket);
    }

    public function render()
    {
        $this->companylist = CompanyList::all();
        $this->subjectlist = Subject::all();

        return view('livewire.user.userticket');
    }
}
