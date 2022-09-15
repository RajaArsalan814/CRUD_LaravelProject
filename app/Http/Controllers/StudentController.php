<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {

        $students = Student::get();
        return view('students.index',compact('students',$students));
    }

    public function create() {

        return view('students.create');
    }

    public function store(Request $request) {

        $student = new Student;
        $student->name = $request->name;
        $student->address = $request->address;
        $student->save();
        return redirect()->route('students')->with('success','Student create Successfully');
    }

    public function edit($id) {

        $student = Student::where('id',$id)->first();
        return view('students.edit',compact('student',$student));
    }

    public function update(Request $request, $id) {

        $student = Student::where('id',$id)->first();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->save();
        return redirect()->route('students')->with('success','Student Update Successfully');

    }

    public function delete($id) {

        Student::where('id',$id)->delete();
        return redirect()->route('students')->with('warning','Student Delete Successfully');
    }

    public function trashed_students() {

        $students =Student::onlyTrashed()->get();
        return view('students.trashed_students',compact('students',$students));
    }

    public function permanent_delete($id) {
        Student::where('id',$id)->forceDelete();
        return redirect()->route('trashed_students')->with('warning','Permanent Delete Successfully');
    }

    public function student_store($id) {
        Student::where('id',$id)->restore();
        return redirect()->route('students')->with('success','Student Restore Successfully');
    }
}
