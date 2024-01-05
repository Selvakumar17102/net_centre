<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Admin;
use App\Models\User;

use Exception;

class AddAdmin extends Component
{

    use WithFileUploads;
    public $name,$email,$phone,$username,$password,$profile,$addadmin,$user,$checkadmin;

    public function submitadmin(){
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        $this->checkadmin =Admin::WHERE('email',$this->email)->first();
        if($this->checkadmin == NULL){
            if($this->profile){
                $this->profilpath= $this->profile->store('profile','public');
            }else{
                $this->profilpath = "https://t3.ftcdn.net/jpg/00/07/32/48/360_F_7324855_mx4CEBWTr81XLOrlQccCROtP2uNR7xbk.jpg";
            }
            $this->addadmin = new Admin;
            $this->addadmin->name = $this->name;
            $this->addadmin->email = $this->email;
            $this->addadmin->phone = $this->phone;
            $this->addadmin->username = $this->username;
            $this->addadmin->password = bcrypt($this->password);

            if($this->profile){
                $this->addadmin->profile ="storage/".$this->profilpath;
            }else{
                $this->addadmin->profile = $this->profilpath;
            }
            $this->addadmin->save();

            $this->user = new User;
            $this->user->name = $this->name;
            $this->user->email = $this->email;
            $this->user->admin_id = $this->addadmin->id;
            $this->user->login_type = 2;
            $this->user->password = bcrypt($this->password);
            if($this->profile){
                $this->user->profile_photo_path = "storage/".$this->profilpath;
            }else{
                $this->user->profile_photo_path = $this->profilpath;
            }
            $this->user->save();
        }else{
            dd('this user already exists !');
        }

        return redirect()->route('superadmin.listadmin');
    }

    public function render()
    {
        return view('livewire.admin.add-admin');
    }
}
