<?php

namespace App\Http\Livewire\User;
use App\Models\customeruser;
use App\Models\User;
use Auth;
use Livewire\Component;

class Adduser extends Component
{
    public $name,$salutation,$email,$phone_number,$whatsapp_number,$user_name,$password,$confirm_password,$position;
    public function Adduser(){
        $this->validate([
            'name' => 'required',
            'salutation' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'whatsapp_number' => 'required',
            'user_name' => 'required',
            'password' => 'required',
            'confirm_password' => 'required_with:password|same:password'
        ]);
        $adduser = new customeruser;
        $adduser->customer_id = Auth::user()->customer_id;
        $adduser->name = $this->name;
        $adduser->salutation = $this->salutation;
        $adduser->position = $this->position;
        $adduser->email = $this->email;
        $adduser->phone_number = $this->phone_number;
        $adduser->whatsapp_number = $this->whatsapp_number;
        $adduser->user_name = $this->user_name;
        $adduser->password = bcrypt($this->password);
        $adduser->confirm_password = bcrypt($this->confirm_password);
        $adduser->save();
        
        $addcustomeruser = new User;
        $addcustomeruser->name = $this->name;
        $addcustomeruser->email = $this->email;
        $addcustomeruser->customer_id = Auth::user()->customer_id;
        $addcustomeruser->login_type = 4;
        $addcustomeruser->password = bcrypt($this->password);
        $addcustomeruser->save();

        return redirect()->route('customer.adduser');

    }
    public function render()
    {
        return view('livewire.user.adduser');
    }
}
