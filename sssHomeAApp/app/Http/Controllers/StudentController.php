<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\College;

class StudentController extends Controller
{
    public function index(){
        $colleges = College::orderBy('name')->pluck('name', 'id')->prepend('All Colleges', '');
        $sort = request('sort') == 'desc' ? 'desc' : 'asc';

        if (request('college_id') == null) {
            $students = Student::orderBy('name', $sort)->get();
        } else {
            $students = Student::where('college_id', request('college_id'))->orderBy('name', $sort)->get();
        }

        return view('students.index', compact('students', 'colleges'));
    }

    public function create() {
        $colleges = College::orderBy('name')->pluck('name', 'id')->prepend('All Colleges', '');
        return view('students.create', compact('colleges','colleges'));
    }

    public function createstore(Request $request) {
        $request->validate([
            'name'=>'required',
            'email' => 'required|email',
            'phone' => 'required|digitsbetween:8,12',
            'dob' => 'required',
            'college_id' => 'required|exists:colleges,id',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('message', 'Student has been added successfully!');
    }

    public function show($id) {
        $student = Student::where('id', $id)->first();
        return view('students.show', compact('student'));
    }

    public function edit($id) {
        $student = Student::where('id', $id)->first();
        $colleges = College::orderBy('name')->pluck('name', 'id');
    
        return view('students.edit', compact('student', 'colleges'));
    }
    

    public function editstore(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'email' => 'required|email',
            'phone' => 'required|digitsbetween:8,12',
            'dob' => 'required',
            'college_id' => 'required|exists:colleges,id',
        ]);

        Student::where('id', $id)->update($request->except('_token'));
        return redirect()->route('students.index')->with('message', 'Student has been updated successfully!');
    }

    public function destroy($id) {
        Student::destroy($id);
        return redirect()->route('students.index')->with('message', 'Student has been deleted successfully!');
    }
}
