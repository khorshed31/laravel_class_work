<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $students;

    public function index(){

        $this->students = new Student();
        $this->students->newStudent();
        return 'Success';
//        $this->students = Student::getAllStudent();
//        return view('all', ['students' => $this->students]);
//        return view('all')->with([
//            'data' => $this->name,
//            'city' => $this->city
//        ]);
//        return view('all', compact('name', 'city'));
    }
}
