<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Customer;
use App\Models\user;
use App\Models\Admin;

use Request;
use Auth;


class Editcustomer extends Component
{
    public $name,$salutation,$email,$company_name,$phone_number,$profile_image,$position,$whatsapp_number,$address_1,$address_2,$address_3,$address_4,$city,$state,$postcode,$adminlist,$admin,$customer_id;

    public function editcustomer(){
        if(Auth::user()->login_type=="1"){

            $validatedDate=  $this->validate([
                'name' => 'required',
                'phone_number' => 'required|numeric',
                'salutation' => 'required',
                'company_name'=>'required',
                'position'=>'required',
                'city'=>'required',
                'state'=>'required',
                'postcode'=>'required',
            ]);
        }else{
            $validatedDate =  $this->validate([
                'name' => 'required',
                'phone_number' => 'required|numeric',
                'salutation' => 'required',
                'company_name'=>'required',
                'position'=>'required',
                'city'=>'required',
                'state'=>'required',
                'postcode'=>'required',
            ]);
        }
        try{
            $editcustomer = Customer::where('id',$this->customer_id)->first();
            $editcustomer->name = $this->name;
            $editcustomer->salutation = $this->salutation;
            $editcustomer->email = $this->email;
            $editcustomer->company_name = $this->company_name;
            $editcustomer->phone_number = $this->phone_number;
            $editcustomer->whatsapp_number = $this->whatsapp_number;
            $editcustomer->position = $this->position;
            $editcustomer->address_line_1= $this->address_1;
            $editcustomer->address_line_2= $this->address_2;
            $editcustomer->address_line_3= $this->address_3;
            $editcustomer->address_line_4= $this->address_4;
            $editcustomer->city = $this->city;
            $editcustomer->state = $this->state;
            $editcustomer->post_code = $this->postcode;
            // $editcustomer->admin_id = $this->admin;
            $editcustomer->save();

            $editcustomer =User::where('customer_id',$this->customer_id)->first();
            $editcustomer->name = $this->name;
            $editcustomer->email = $this->email;
            $editcustomer->login_type = 3;
            $editcustomer->save();

            if(Auth::user()->login_type=="1"){
                return redirect()->route('superadmin.listcustomer');
            }else{
                return redirect()->route('admin.listcustomer');

            }
        }catch(Exception $e){
            // $this->dispatchBrowserEvent('alert', [
            //     'type' => 'error',
            //     'message' =>'Something  Went Wrong, please Check Your Internet',
            // ]);
            dd('Something  Went Wrong');
        }
    }
    public function render()
    {
        $id = base64_decode(Request::segment('3'));
        
        $editcustomer = Customer::WHERE('id',$id)->first();
        if(Auth::user()->login_type=="1"){
            
            $adminid=explode(",",$editcustomer->admin_id);
            $admin_name=Admin::with('customername')->whereIn('id',$adminid)->first();
            
            if($editcustomer){
                $this->name = $editcustomer->name;
                $this->salutation = $editcustomer->salutation;
                $this->email = $editcustomer->email;
                $this->company_name = $editcustomer->company_name;
                $this->phone_number = $editcustomer->phone_number;
                $this->position = $editcustomer->position;
                $this->whatsapp_number = $editcustomer->whatsapp_number;
                $this->address_1 = $editcustomer->address_line_1;
                $this->address_2 = $editcustomer->address_line_2;
                $this->address_3 = $editcustomer->address_line_3;
                $this->address_4 = $editcustomer->address_line_4;
                $this->postcode = $editcustomer->post_code;
                $this->city = $editcustomer->city;
                $this->state = $editcustomer->state;
                $this->admin = $admin_name->name;
                $this->customer_id = $editcustomer->id;
                
            }
        }else{
            if($editcustomer){
                $this->name = $editcustomer->name;
                $this->salutation = $editcustomer->salutation;
                $this->email = $editcustomer->email;
                $this->company_name = $editcustomer->company_name;
                $this->phone_number = $editcustomer->phone_number;
                $this->position = $editcustomer->position;
                $this->whatsapp_number = $editcustomer->whatsapp_number;
                $this->address_1 = $editcustomer->address_line_1;
                $this->address_2 = $editcustomer->address_line_2;
                $this->address_3 = $editcustomer->address_line_3;
                $this->address_4 = $editcustomer->address_line_4;
                $this->postcode = $editcustomer->post_code;
                $this->city = $editcustomer->city;
                $this->state = $editcustomer->state;
                $this->customer_id = $editcustomer->id;
                
            }
        }
        return view('livewire.customer.editcustomer');
    }
}
