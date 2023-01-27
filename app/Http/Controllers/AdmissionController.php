<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index()
    {
        $admissions = Admission::orderBy('id','desc')->paginate(5);
        return view('admissions.index', compact('admissions'));
    }
    public function create()
    {
        return view('admissions.create');
    }
    public function store(Request $request)
    {
    $request ->validate([
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
    Admission::create($request->post());

    return redirect()->route('admissions.index')->with('success','Congreats you are Addmitted!.');

}
public function show(Admission $admission)
{
    return view('admissions.show',compact('admission'));
}


public function edit(Admission $admission)
    {
        return view('admissions.show',compact('admission'));
    }

    public function update(Request $request,Admission $admission)
    {
    $request ->validate([
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

    $admission->fill($request->post())->save();

    return redirect()->route('admissions.index')->with('success','You are updated successfully');

}
public function destroy(Admission $admission)
{
    $admission->delete();
    return redirect()->route('admissions.index')->with('success','you are deleted successfully');
}

}
