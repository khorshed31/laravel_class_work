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
}
