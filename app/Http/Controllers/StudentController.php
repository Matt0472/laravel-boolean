<?php

namespace App\Http\Controllers;

use App\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;
    private $genders;

    public function __construct()
    {
        $this->students = config('students.allStudents');
        $this->genders = config('students.genders');
    }
    public function index()
    {
        $students = $this->students;
        $genders = $this->genders;

        return view('students.index', compact('students', 'genders'));
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

    public function callDb()
    {
        $students = Student::all();
        dd($students);
    }
}
