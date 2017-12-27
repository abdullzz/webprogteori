@extends('layouts.master')
@section('title')
ANXTY Community
@endsection

@section('content')
<div class="jumbotron">
  <h1>Come join us</h1>
  <p>Ayo gabung ke komunitas ANXTY, banyak manfaat yang bakal lu peroleh, mulai dari pengalaman bisnis, banyak channel (temen), dapet profits dan masih banyak lagi.</p>
  <p>Tunggu apa lagi?</p>
  <p><a class="btn btn-primary btn-lg" href="/register" role="button">Daftar Kuy</a></p>
</div>
@endsection

@section('styles')
  <style>
    .jumbotron{
      margin-top: 10%;
      background: linear-gradient( rgba(0, 0, 0, 0.83), rgba(0, 0, 0, 0.5) ), url('/img/joinus.jpeg');
      background-size: cover;
      color: white;
    }
    .bckcolor{
      background-color: black;
    }
  </style>
@endsection

@section('scripts')
<script>
  $('.nav>li').removeClass('active');
  $('#community').addClass('active');
  $('#bck').addClass('bckcolor');
</script>
@endsection
