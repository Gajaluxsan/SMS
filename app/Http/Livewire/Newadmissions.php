<?php

namespace App\Http\Livewire;

use App\Models\Classe;
use App\Models\Newadmission;
use App\Models\Subject;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Newadmissions extends Component
{
    public $Name, $NIC, $Address, $Phone_Number, $DOB, $Gender, $Email_Id, $Password;
    public $newadmissions;
    public $edit_mode = false;
    public $admission_id;
    public $roles;
    public $subjects;
    public $classes;
    public $Class_Teacher;


public function store(){
    $validated_data = $this->validate([
            'Name' => 'required',
            'NIC' => 'required',
            'Address' => 'required',
            'Phone_Number' => 'required',
            'DOB' => 'required',
            'Gender' => 'required',
            'Email_Id' => 'required',
            'Password' => 'required',
        ]);
 Newadmission::create($validated_data);
        session()->flash('message', 'congreats! You are admitted....');
        $this->resetInputFields();
}
private function resetInputFields()
    {
        $this->Name = '';
        $this->NIC = '';
        $this->Address = '';
        $this->Phone_Number = '';
        $this->DOB = '';
        $this->Gender = '';
        $this->Email_Id = '';
        $this->Password = '';
    }

    public function edit($id)
    {
        $this->edit_mode = true;
        $admission = Newadmission::find($id);
        $this->Name = $admission->Name;
        $this->NIC = $admission->NIC;
        $this->Address = $admission->Address;
        $this->Phone_Number = $admission->Phone_Number;
        $this->DOB = $admission->DOB;
        $this->Gender = $admission->Gender;
        $this->Email_Id = $admission->Email_Id;
        $this->admission_id = $id;


    }
    public function update()
    {
        $validated_data = $this->validate([
            'Name' => 'required',
            'NIC' => 'required',
            'Address' => 'required',
            'Phone_Number' => 'required',
            'DOB' => 'required',
            'Gender' => 'required',
            'Email_Id' => 'required',
            'Password' => 'required',
        ]);
        $admission = newadmission::find($this->admission_id);
        $admission->update($validated_data);


        session()->flash('message', 'congreats! You are updated....');
        $this->resetInputFields();
        $this->edit_mode = false;
    }

    public function cancelUpdate()
    {
        $this->edit_mode = false;
        $this->resetInputFields();
    }

    public function delete($id)
    {
        $admission = Newadmission::find($id);
        $admission->delete();
    }

    public function render()
    {
        $this->roles =Role::all();
        $this->newadmissions = Newadmission::all();
        $this->subjects = Subject::all();
        $this->classes = Classe::all();
        return view('livewire.newadmissions');
    }
}
