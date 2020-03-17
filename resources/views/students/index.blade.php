@foreach (config('students.allStudents') as $student)
    {{$student['name']}}
@endforeach

