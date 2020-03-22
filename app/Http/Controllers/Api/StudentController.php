<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function gender(Request $request)
    {
      
        $data = $request->all();
        $genders = config('students.genders');
        $students = config('students.allStudents');
        $result = [
            'error' => '',
            'response' => []
        ];

        if (in_array($data['gender'], $genders)) {
            $genderPost = $data['gender'];
            if ($data['gender'] == 'all') {
                $result['response'] = $students;
                return response()->json($result);
            } else {
                foreach ($students as $key => $student) {
                    if ($student['gender'] == $genderPost) {
                        $result['response'][] = $student;
                    }
                }
                return response()->json($result);
            }
        } else {
            $result['error'] = 'Gender non esistente';
            return response()->json($result);
        }
        
        
    }


    public function filterAll(Request $request)
    {
        $students = config('students.allStudents');


        $typeRequest = [
            'eta',
            'name',
            'azienda'
        ];
        $data = $request->all();

        foreach ($data as $key => $value) {
            if (!in_array($key, $typeRequest)) {
                unset($data[$key]);
            }
        }
        
        foreach ($data as $key => $value) {
            if (array_key_first($data) == $key) {
                $studentsFiltered = $this->filterFor($key, $value, $students);
            }
            
            else {
                $studentsFiltered = $this->filterFor($key, $value, $studentsFiltered);
            }
        }


        return response()->json($studentsFiltered);
    }

    private function filterFor($type, $value, $array)
    {

        $filtered = [];
        foreach ($array as $element) {
            if ($element[$type] == $value) {
                $filtered[] = $element;
            }
        }
        return $filtered;
    }
}


    
    

   
