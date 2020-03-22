@extends('layouts.layout')
@section('main-content')
<div class="filter">
  <select name="filter" id="filter">
    @foreach ($genders as $gender)
      <option value="{{$gender}}">@if($gender == 'm') {{$gender = 'Maschio'}} @elseif($gender == 'f') {{$gender = 'Femmina'}} @else {{$gender = 'Tutti'}} @endif</option>
    @endforeach
  </select>
</div>
<form>
  <div class="form-group">
    <label for="student-name">Nome Studente</label>
    <input type="name" class="form-control" id="student-name" placeholder="Inserisci nome studente">
  </div>
  <div class="form-group">
    <label for="company-name">Nome Azienda</label>
    <input type="company-name" class="form-control" id="company-name" placeholder="Inserisci nome azienda">
  </div>
  <div class="form-group">
    <label for="student-age">Età Studente</label>
    <input type="student-age" class="form-control" id="student-age" placeholder="Inserisci l'eta dello studente">
  </div>
  <button type="button" id="send-btn" class="btn btn-primary">Invia</button>
</form>
<section class="all-students">
  @foreach ($students as $student)
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
  @endforeach
</section>
@endsection

