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

    public function show($slug)
    {
        $students = $this->students;
        $find = false;
        $thisStudent = [];

        foreach ($students as $student) {
            if ($student['slug'] == $slug) {
                $find = true;
                $thisStudent = $student;
            }
        }

        if ($find) {
            return view('students.show', ['student' => $thisStudent]);
        } else {
            abort('404');
        }
    }
}
