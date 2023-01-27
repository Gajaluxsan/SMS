<?php

namespace App\Http\Livewire;

use App\Models\Admission;
use App\Models\Classe;
use App\Models\Subject;
use Livewire\Component;
use Spatie\Permission\Models\Role;

use function GuzzleHttp\Promise\all;

class Admissions extends Component
{
    public $Name, $NIC, $Address, $Phone_Number, $DOB, $Gender, $Email_Id, $Password;
    public $admissions;
    public $roles;
    public $subjects;
    public $classes;
    public $edit_mode = false;

    // protected $rules=[
    //     'Name'=>'required|min:6',
    //     'Address'=>'required',
    //     'Phone_Number'=>'required|Digit:10',
    //     'Gender'=>'required',
    //     'Email_Id'=>'required|email',
    //     'Role'=>'required',
    // ];


    public function storess()
{
        $this->edit_mode =true;
        // $validated_data = $this->validate([
        //     'Name' => 'required',
        //     'NIC' => 'required',
        //     'Address' => 'required',
        //     'Phone_Number' => 'required',
        //     'DOB' => 'required',
        //     'Gender' => 'required',
        //     'Email_Id' => 'required',
        //     'Password' => 'required',
        //     // 'Role' => 'required',
        // ]);


        // Admission::create($validated_data);

        // session()->flash('message', 'congreats! You are admitted....');
        // $this->resetInputFields();
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
        // $this->Role = '';
    }

    public function edidts($id)
    {
        $this->edit_mode = true;
        $admission = Admission::where('id', '=', $id)->first();
        $this->Name = $admission->Name;
        $this->NIC = $admission->NIC;
        $this->Address = $admission->Address;
        $this->Phone_Number = $admission->Phone_Number;
        $this->DOB = $admission->DOB;
        $this->Gender = $admission->Gender;
        $this->Email_Id = $admission->Email_Id;

        // $this->Role = $admission->Role;
        // $this->id = $id;
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
            // 'Role' => 'required',
        ]);

        $admission = Admission::where('id', '=', $this->id)->first();
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
        $admission = Admission::find($id);
        $admission->delete();
    }



    public function render()
    {
        $this->roles =Role::all();
        $this->admissions = Admission::all();
        $this->subjects = Subject::all();
        $this->classes = Classe::all();
        return view('livewire.Admin.admissions');
    }
}
