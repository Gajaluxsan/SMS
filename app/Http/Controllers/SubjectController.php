<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('subjects', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_subjects');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subjects = new Subject();
        $subjects->S_id = $request->input('S_id');
        $subjects->S_name = $request->input('S_name');

        $subjects->save();
        return redirect('subject')->with('success', 'subject has been saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dd($value,$fail)
    {

        $str = $value;

        if (strlen($str) == 12) {
            if (in_array(".", str_split($str))) {
                $fail('The  is invalid.');
            }
        }
    }


    public function list()
    {
        $subjects = Subject::all();
        return view('subjects', compact('subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::find($id);
        return view('edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $subject = Subject::find($request->input('S_id'));
        $subject->S_name = $request->input('S_name');
        $subject->update();
        return redirect('/subject');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);

        $subject->delete();
        //    dd($request->all());
        return response()->json(['success' => 'subject record has been  Deleted! ']);
    }
}