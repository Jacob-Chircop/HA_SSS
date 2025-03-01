<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;

class CollegeController extends Controller
{
    public function index() {
        $colleges = College::orderBy('name')->get();
        
        return view('colleges.index', compact('colleges'));
    }

    public function create() {
        return view('colleges.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'address'=>'required',
        ]);

        College::create($request->all());
        return redirect()->route('colleges.index')->with('message', 'College has been added successfully!');
    }

    public function edit($id) {
        $College = College::where('id', $id)->first();

        return view('colleges.edit', compact('College', 'College') , ['id' => College::find($id)]);
    }

    public function editstore(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'address'=>'required',
        ]);

        College::where('id', $id)->update($request->except('_token'));
        return redirect()->route('colleges.index')->with('message', 'College has been updated successfully!');
    }

    
}
