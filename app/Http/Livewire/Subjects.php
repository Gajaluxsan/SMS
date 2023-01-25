<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subject;

class Subjects extends Component
{
    public $S_id,$S_name;
    public $subjects;
    public $edit_mode = false;
    public $subject_id;

public function store()
{
    $validated_data = $this->validate([
            'S_id' => 'required',
            'S_name' => 'required',
    ]);
    Subject::create($validated_data);

        session()->flash('message', 'SUbjects are added....');
        $this->resetInputFields();
}
private function resetInputFields()
    {  //empty field
        $this->S_id = '';
        $this->S_name = '';
    }

    public function edit($id)
    {
        $this->edit_mode = true;
        $subject = Subject::where('S_id', '=', $id)->first();
        $this->S_id = $subject->S_id;
        $this->S_name = $subject->S_name;
        $this->subject_id=$id;

    }

    public function update()
{
    $validated_data = $this->validate([
            'S_id' => 'required',
            'S_name' => 'required',
    ]);
    $subject = Subject::where('S_id', '=', $this->subject_S_id)->first();
    $subject->update($validated_data);


    session()->flash('message', 'Subjects are updated....');
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
        $subject = Subject::find($id);
        $subject->delete();
    }

    public function render()
    {
        $this->subjects = Subject::all();
        return view('livewire.subjects');
    }
}
