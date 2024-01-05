<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\CompanyList;

use Request;

class Company extends Component
{
    public $companyname,$companylist,$data,$ids,$editcompanyname,$updatecompany;

    public function submitcompany(){
        $this->validate([
            'companyname' => 'required',
        ]);

        $this->addcompany = new CompanyList;
        $this->addcompany->company_name = $this->companyname;
        $this->addcompany->save();

        return redirect()->route('superadmin.company');
    }

    public function updatecompany(){
        dd("ddsdd");
        // $this->updatecompany = CompanyList::WHERE('id',$this->id)->first();
        // $this->updatecompany->company_name = $this->editcompanyname;
        // $this->updatecompany->update();
    }

    public function render()
    {
        $this->data = CompanyList::WHERE('id',Request::segment('3'))->first();
        if($this->data){
            $this->editcompanyname = $this->data->company_name;
            $this->ids = $this->data->id;
        }
        
        $this->companylist = CompanyList::all();
        return view('livewire.company');
    }
}
