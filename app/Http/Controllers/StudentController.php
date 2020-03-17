<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;

    public function __construct()
    {
        $this->students = config('students.allStudents');
    }
    public function index()
    {
        $students = $this->students;
        
        return view('students.index', compact('students'));
    }

    public function show($id)
    {
        $student = $this->students[$id];
        if (empty($student)) 
        {
            abort(404);
        } 
        else 
        {
            return view('students.show');
        }
    }
}
