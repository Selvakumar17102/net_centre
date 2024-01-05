<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subject as subjectmodel;
use Request;

class Subject extends Component
{
    public $subject,$addsubject,$subjectlist,$data,$ids,$editsubject,$updatesubject;


    public function submitsubject(){
        $this->validate([
            'addsubject' => 'required',
        ]);
        $this->subject = new subjectmodel;
        $this->subject->subject = $this->addsubject;
        $this->subject->save();

        return redirect()->route('superadmin.subject');
    }

    public function updatesubject(){
        dd("sssdsd");
    }

    public function render()
    {
        $this->data = subjectmodel::WHERE('id',Request::segment('3'))->first();
        if($this->data){
            $this->editsubject = $this->data->subject;
            $this->ids = $this->data->id;
        }

        $this->subjectlist = subjectmodel::all();
        return view('livewire.subject');
    }
}
