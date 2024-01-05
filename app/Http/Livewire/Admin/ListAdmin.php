<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Admin;
use App\Models\User;

class ListAdmin extends Component
{
    public $adminlist;
    public function render()
    {
        $this->adminlist=Admin::all();
        return view('livewire.admin.list-admin');
    }

    public function updateStatus($value,$email){

        $activestatus = Admin::where('email',$email)->first();

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

        return redirect()->route('superadmin.listadmin');

    }
}
