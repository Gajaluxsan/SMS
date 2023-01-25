<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()

    {
        $this->middleware('permission:module-list|module-create|module-edit|module-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:module-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:module-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:module-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $modules = Module::latest()->paginate(5);
        return view('modules.index', compact('modules'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'module_id' => 'required',
            'name' => 'required',
        ]);

        Module::create($request->all());
        return redirect()->route('modules.index')
                        ->with('success','Module created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('modules.show',compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('modules.edit',compact('module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $modules)
    {
        request()->validate([
            'module_id' => 'required',
            'name' => 'required',
        ]);

        $modules->update($request->all());
        return redirect()->route('modules.index')
                        ->with('success','Module updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $modules)
    {
        $modules->delete();
        return redirect()->route('modules.index')
                        ->with('success','Module deleted successfully');
    }
}
