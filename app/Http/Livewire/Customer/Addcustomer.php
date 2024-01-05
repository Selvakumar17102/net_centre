<?php

namespace App\Http\Livewire\Customer;
use App\Models\Customer;
use App\Models\User;
use App\Models\Admin;
// use Illuminate\Support\Str;
use App\Models\CompanyList;
use Livewire\Component;
use Auth;
class Addcustomer extends Component
{
    public $name,$salutation,$email,$companylist,$company_name,$phone_number,$profile_image,$password,$position,$whatsapp_number,$address_1,$address_2,$address_3,$address_4,$city,$state,$postcode,$adminlist,$admin;

    public function Addcustomer(){
        $randomFourDigits = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);

        if(Auth::user()->login_type=="1"){
            $this->validate([
                'name' => 'required',
                'email'=>'required|email|unique:customers,email',
                'phone_number' => 'required|numeric|unique:customers,phone_number',
                'salutation' => 'required',
                'company_name'=>'required',
                'position'=>'required',
                'city'=>'required',
                'state'=>'required',
                'postcode'=>'required',
                'password'=>'required',
                'admin'=>'required',
            ]);
        }else{
            $this->validate([
                'name' => 'required',
                'email'=>'required|email|unique:customers,email',
                'phone_number' => 'required|numeric|unique:customers,phone_number',
                'salutation' => 'required',
                'company_name'=>'required',
                'position'=>'required',
                'city'=>'required',
                'state'=>'required',
                'postcode'=>'required',
                'password'=>'required',
            ]);
        }
        try{
        if(Auth::user()->login_type=="1"){

            $addcustomer = new Customer;
            $addcustomer->name = $this->name;
            $addcustomer->account_number = '5000' . $randomFourDigits;
            $addcustomer->salutation = $this->salutation;
            $addcustomer->email = $this->email;
            $addcustomer->company_name = $this->company_name;
            $addcustomer->phone_number = $this->phone_number;
            $addcustomer->whatsapp_number = $this->whatsapp_number;
            $addcustomer->position = $this->position;
            $addcustomer->address_line_1= $this->address_1;
            $addcustomer->address_line_2= $this->address_2;
            $addcustomer->address_line_3= $this->address_3;
            $addcustomer->address_line_4= $this->address_4;
            $addcustomer->city = $this->city;
            $addcustomer->state = $this->state;
            $addcustomer->post_code = $this->postcode;
            $addcustomer->password = bcrypt($this->password);
            $addcustomer->admin_id = $this->admin;
            $addcustomer->save();

            $addcustomeruser = new User;
            $addcustomeruser->name = $this->name;
            $addcustomeruser->email = $this->email;
            $addcustomeruser->customer_id = $addcustomer->id;
            $addcustomeruser->login_type = 3;
            $addcustomeruser->password = bcrypt($this->password);
            $addcustomeruser->save();

            // $this->dispatchBrowserEvent('alert', [
            //     'type' => 'success',
            //     'message' => " Customer Added is successfully"
            // ]);
            return redirect()->route('superadmin.addcustomer');

        }else{
            // dd(Auth::user()->admin_id);
            $addcustomer = new Customer;
            $addcustomer->admin_id = Auth::user()->admin_id;
            $addcustomer->name = $this->name;
            $addcustomer->account_number = '5000' . $randomFourDigits;
            $addcustomer->salutation = $this->salutation;
            $addcustomer->email = $this->email;
            $addcustomer->company_name = $this->company_name;
            $addcustomer->phone_number = $this->phone_number;
            $addcustomer->whatsapp_number = $this->whatsapp_number;
            $addcustomer->position = $this->position;
            $addcustomer->address_line_1= $this->address_1;
            $addcustomer->address_line_2= $this->address_2;
            $addcustomer->address_line_3= $this->address_3;
            $addcustomer->address_line_4= $this->address_4;
            $addcustomer->city = $this->city;
            $addcustomer->state = $this->state;
            $addcustomer->post_code = $this->postcode;
            $addcustomer->password = bcrypt($this->password);
            $addcustomer->save();

            $addcustomeruser = new User;
            $addcustomeruser->name = $this->name;
            $addcustomeruser->email = $this->email;
            $addcustomeruser->customer_id = $addcustomer->id;
            $addcustomeruser->login_type = 3;
            $addcustomeruser->password = bcrypt($this->password);
            $addcustomeruser->save();

            return redirect()->route('admin.addcustomer');

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
        $this->companylist =CompanyList::all(); 
        $this->adminlist=Admin::all();
        return view('livewire.customer.addcustomer');
    }

}
