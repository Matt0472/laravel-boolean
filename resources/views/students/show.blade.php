@extends('layouts.layout')
@section('main-content')
<section class="all-students">
    <div class="student">
      <div class="info">
        <img src="{{$student['img']}}" alt="{{$student['name']}}">
          <a href="{{route('student.show', ['slug' => $student['slug']])}}">
            <h3>
              {{$student['name']}}({{$student['eta']}})
            </h3>
          </a>
          <span>
            Assunt{{($student['gender'] == 'm') ? 'o' : 'a'}} da {{$student['azienda']}} 
            come {{$student['ruolo']}}
          </span>
      </div>
      <p>{{$student['descrizione']}}</p>
      <a href="" class="linkedin-icon">
        <i class="fab fa-linkedin"></i>
      </a>
    </div>
    <a href="{{route('student.index')}}"><-Torna indietro</a>
</section>
@endsection