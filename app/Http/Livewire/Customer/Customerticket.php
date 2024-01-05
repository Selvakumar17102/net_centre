<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Customertickets;
use App\Models\customer;
use Livewire\WithFileUploads;
use Haruncpi\LaravelIdGenerator\IdGenerator;

use Auth;

class Customerticket extends Component
{
    use WithFileUploads;

    public $subject,$description,$attachumentfile,$custicketlist;

    public function customerticket(){

        $randomFourDigits = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);


        $this->validate([
            'subject' => 'required',
            'description' => 'required',
        ]);

        $admin_id = customer::where('id',Auth::user()->customer_id)->first();

        $this->attachmentpath = $this->attachumentfile->store('customerticket','public');

        $addcusticket = new Customertickets;
        $addcusticket->customer_id  = Auth::user()->customer_id;
        $addcusticket->admin_id  = $admin_id->admin_id;
        $addcusticket->subject = $this->subject;
        $addcusticket->ticket_id =  $randomFourDigits;
        $addcusticket->description = $this->description;
        $addcusticket->file = "storage/".$this->attachmentpath;
        $addcusticket->save();
        return redirect()->route('customer.ticket');

    }

    public function render()
    {
        $this->custicketlist = Customertickets::where('customer_id',Auth::user()->customer_id)->get();

        return view('livewire.customer.customerticket');
    }
}


	