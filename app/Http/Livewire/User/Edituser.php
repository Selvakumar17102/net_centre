<?php

namespace App\Http\Livewire\User;
use App\Models\Customeruser;
use Request;
use Livewire\Component;

class Edituser extends Component
{
    public $user_id,$whatsapp_number,$name,$salutation,$email,$phone_number,$user_name,$position;

    public function edituser(){

        $validatedDate=  $this->validate([
            'name' => 'required',
            'phone_number' => 'required|numeric',
            'salutation' => 'required',
            'whatsapp_number'=>'required',
            'position'=>'required',
            'user_name'=>'required',
        ]);
        try{

            $edituser = Customeruser::where('id',$this->user_id)->first();
            $edituser->name = $this->name;
            $edituser->whatsapp_number = $this->whatsapp_number;
            $edituser->salutation = $this->salutation;
            $edituser->phone_number = $this->phone_number;
            $edituser->user_name = $this->user_name;
            $edituser->save();
        }catch(Exception $e){
             // $this->dispatchBrowserEvent('alert', [
            //     'type' => 'error',
            //     'message' =>'Something  Went Wrong, please Check Your Internet',
            // ]);
            dd('Something  Went Wrong');
        }
        return redirect()->route('customer.listuser');

    }


    public function render()
    {
        $id = base64_decode(Request::segment('3'));
        $edituser = Customeruser::where('id',$id)->first();
        // dd($edituser);
        if($edituser){
            $this->name = $edituser->name;
            $this->salutation = $edituser->salutation;
            $this->email = $edituser->email;
            $this->phone_number = $edituser->phone_number;
            $this->position = $edituser->position;
            $this->whatsapp_number = $edituser->whatsapp_number;
            $this->user_name = $edituser->user_name;
            $this->user_id = $edituser->id;
            
        }
        return view('livewire.user.edituser');
    }
}
