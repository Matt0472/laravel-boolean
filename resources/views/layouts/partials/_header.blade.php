<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- link al nostro stile --}}
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  {{-- link google font --}}
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700&display=swap" rel="stylesheet">
  {{-- link fontawesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

  <title>Laravel Boolean Careers</title>
</head>
<body>
  <div class="nav-container">
    <div class="nav-left">
      <img src="https://www.boolean.careers/images/common/logo.png" alt="">
    </div>
    <div class="nav-right">
      <ul>
        <li>
        <a href="{{route('static_page.home')}}">Home</a>
        </li>
        <li>
          <a href="">Corso</a>
        </li>
        <li>
          <a href="">Dopo il Corso</a>
        </li>
        <li>
          <a href="">Lezione Gratuita</a>
        </li>
        <li>
          <a class="candidati-btn" href="">Candidati ora</a>
        </li>
      </ul>
    </div>
    
  </div>
    <div class="wrapper">