<?php

namespace App\Http\Livewire\User;
use App\Models\Customeruser;
use Livewire\Component;
use App\Models\User;
use Auth;
class Listuser extends Component
{
    public $customerlist;

    public function updateStatus($value,$email){

        $activestatus = Customeruser::where('email',$email)->first();
        // dd($activestatus);

        if ($value == true) {
            $activestatus->status = '0';
        } else {
            $activestatus->status = '1';
        }
            $activestatus->save();

        $useractivestatus = User::where('email',$email)->first();

        if($value == true){
            $useractivestatus->status = '0';
        }else{
            $useractivestatus->status = '1';
        }

        $useractivestatus->save();
        return redirect()->route('customer.listuser');
    
    }

    public function render()
    {
        $this->customerlist = customeruser::all();
        return view('livewire.user.listuser');
    }

    
}
