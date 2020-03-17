@extends('layouts.layout')
@section('main-content')
  @foreach ($students as $student)
    <div class="student">
      <div class="info">
        <img src="{{$student['img']}}" alt="{{$student['name']}}">
          <h2>
            {{$student['name']}}({{$student['eta']}})
          </h2>
          <h3>
            Assunt{{($student['genere'] == 'm') ? 'o' : 'a'}} da {{$student['azienda']}} 
            come {{$student['ruolo']}}
          </h3>
      </div>
      <p>{{$student['descrizione']}}</p>
    </div>
  @endforeach
@endsection

