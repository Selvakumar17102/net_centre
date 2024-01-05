<?php

namespace App\Http\Livewire\Customer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Customer;
use App\Models\user;

// use Auth;
class Listcustomer extends Component
{
    public $customerlist,$user;
    
    public function render()
    {
        if(Auth::user()->login_type=="1"){
            $this->customerlist=Customer::all();
        }else{
            $this->customerlist=Customer::where('admin_id',Auth::user()->admin_id)->get();
            
        }
        return view('livewire.customer.listcustomer');
    }


    public function sendId($id){
        $this->user = User::where('customer_id',$id)->first();

        $credentials = [
            'email' => $this->user->email,
            'password' =>$this->user->password,
        ];

        dd(Auth::attempt($credentials));

        if (Auth::attempt($credentials)) {
            return redirect()->to('customer.dashboard');
        } else {
            dd('error', 'Invalid credentials');
        }
    }
    public function updateStatus($value,$email){

        $activestatus = Customer::where('email',$email)->first();
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

        if(Auth::user()->login_type=="1"){
            return redirect()->route('superadmin.listcustomer');
        }else{
            return redirect()->route('admin.listcustomer');

        }
    
    }
}
