@extends('layouts.master')

@section('title')
About Us
@endsection

@section('content')
<div class="page-header">
  <h1>ANXTY <small>clothing line sekaligus tempat ngumpul</small></h1>
</div>
<br>

<div class="media">
  <div class="media-left media-middle">
    <img src="{{URL('img\abizar.jpg')}}" alt="..." class="media-object img-circle" style="max-height:300px;float:left;padding:10px;">
  </div>
  <div class="media-body">
    <h1 class="media-heading">Hello Guys!</h1>
    <br>
    <p>Kenalin, nama gw abizar, lu bisa panggil gw bijar aja, gw adalah salah satu founder dari clothing line ini.</p>
    <p>Kita buat clothing line ini bukan cuma pengen jualan aja, kita juga pengen punya sebuah komunitas besar dimana elo dan gw bisa bangun bisnis ini bareng2</p>
    <p>Masalah modal santai aje, udah ada yang nanganin, tapi kalo lu mau bantu bisa kok, profit dibagi rata</p>
    <p>Buat elu elu yang punya saran design, kita perlu banget nih, tinggal join aja sama kita nanti kita diskusi-in design yang lo buat</p>
    <p>Atau kalo lu gamau ribet, lu bisa upload langsung di website ini, nanti kita hubungin lu langsung kalo emang menarik</p>
    <p>Design yang udah fix bakal tampil di website ini dan lu bisa beli via online</p>
  </div>
  </div>
  @endsection

@section('scripts')
<script>
  $('.nav>li').removeClass('active');
  $('#about').addClass('active');
</script>
@endsection

@section('styles')
<style >
  p{
  font-weight: bold;
  }
</style>
@endsection
