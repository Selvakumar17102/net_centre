<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Admin;
use App\Models\User;

use Request;

class EditAdmin extends Component
{

    use WithFileUploads;
    public $name,$email,$phone,$username,$password,$profile,$profiles,$ids;
    public $data;

    public function editadmin(){
        if($this->profile){
            $this->profilpath= $this->profile->store('profile','public');
        }else{
            $this->profilpath = $this->profiles;
        }

        $this->submitdata = Admin::WHERE('id',$this->ids)->first();
        $this->submitdata->name = $this->name;
        $this->submitdata->phone = $this->phone;
        $this->submitdata->username = $this->username;
        // $this->submitdata->password = bcrypt($this->password);
        if($this->profile){
            $this->submitdata->profile = "storage/".$this->profilpath;
        }else{
            $this->submitdata->profile = $this->profilpath;
        }
        $this->submitdata->update();
        
        $this->submituserdata = User::WHERE('admin_id',$this->ids)->first();
        $this->submituserdata->name = $this->name;
        if($this->profile){
            // $this->submitdata->profile = "storage/".$this->profilpath;
            $this->submituserdata->profile_photo_path = "storage/".$this->profilpath;
        }else{
            $this->submituserdata->profile_photo_path = $this->profilpath;
        }
        
        // $this->submituserdata->password = bcrypt($this->password);
        $this->submituserdata->update();

        return redirect()->route('superadmin.listadmin');
    }

    public function render()
    {
        $id = base64_decode(Request::segment('3'));
        $this->data = Admin::WHERE('id',$id)->first();
        if($this->data){
            $this->name = $this->data->name;
            $this->email = $this->data->email;
            $this->phone = $this->data->phone;
            $this->username = $this->data->username;
            $this->profiles = $this->data->profile;
            $this->ids = $this->data->id;
        }
        return view('livewire.admin.edit-admin');
    }
}
