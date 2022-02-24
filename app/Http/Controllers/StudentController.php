<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Student;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use function Symfony\Component\Mime\Header\all;

class StudentController extends Controller
{
    protected $student;
    protected $students;

    public function index(){

        return view('add-student');
    }

    public function create(Request $request){

        $this->student = new Student();

        $this->student->name    = $request->name;
        $this->student->email   = $request->email;
        $this->student->mobile  = $request->mobile;
        $this->student->save();

        return redirect()->back()->with('message', 'Student Add Successfully');
    }

    public function manage(){

//        return Student::orderBy('id', 'desc')->take(2)->get();
//        return Student::orderBy('id', 'desc')->get();
        $this->students = Student::orderBy('id', 'desc')->get();
        return view('manage-student', ['students' => $this->students]);
    }

    public function edit($id){
        $this->student = Student::find($id);
        return view('edit-student', ['student' => $this->student]);
    }

    public function update(Request $request, $id){

        $this->student = Student::find($id);

        $this->student->name    = $request->name;
        $this->student->email   = $request->email;
        $this->student->mobile  = $request->mobile;
        $this->student->save();

        return redirect('/manage-student')->with('message', 'Student Updated Successfully');
    }

    public function delete($id){

        $this->student = Student::find($id);
        $this->student->delete();
        return redirect('/manage-student')->with('message', 'Student Delete Successfully');
    }
}
