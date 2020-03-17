@extends('layouts.layout')
@section('main-content')
<section class="all-students">
  @foreach ($students as $student)
    <div class="student">
      <div class="info">
        <img src="{{$student['img']}}" alt="{{$student['name']}}">
          <h3>
            {{$student['name']}}({{$student['eta']}})
          </h3>
          <span>
            Assunt{{($student['genere'] == 'm') ? 'o' : 'a'}} da {{$student['azienda']}} 
            come {{$student['ruolo']}}
          </span>
      </div>
      <p>{{$student['descrizione']}}</p>
      <a href="" class="linkedin-icon">
        <i class="fab fa-linkedin"></i>
      </a>
    </div>
  @endforeach
</section>
@endsection
