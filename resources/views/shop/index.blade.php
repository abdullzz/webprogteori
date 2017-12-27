@extends('layouts.master')

@section('title')
  ANXTY
@endsection

@section('content')
<br>
<marquee class="well" behavior="alternate" scrollamount="3"><div style="font-weight: bold;">grand opening ANXTY clothing line! join our community to post your own design and make friends</div></marquee>


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="min-height:280px;border-size
2px;border-color:black;border-style:solid">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <!-- <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li> -->
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <div style="padding-top:50px;">
        <center><img align="middle" src="{{url('/img/anxty.jpg')}}" /></center>
        <br>
        <center><p class="forthy">For Thy Who Never Knew Where You Belong</p></center>
      </div>
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <div style="padding-top:10px">
        <center>  <img src="{{url('/img/weneedyou.jpeg')}}" alt="..." style="max-height:200px;"></center>
        <center><p class="forthy">We need you! join us, submit your own design and get profits!</p></center>
      </div>
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<!-- ujung slider -->
<div class="panel panel-default">
  <div class="panel-body">
    <center><p style="font-weight:bold;font-size:20px;">Selamat datang di website kami</p>
    </center>
  </div>
  <div class="panel-footer">
    <p style="font-weight:bold;font-size:15px;">Kita adalah usaha clothing line dimana design yang dibuat datang dari komunitas kita bro</p>
    <p style="font-weight:bold;font-size:15px;">Kalo mau join, tinggal register aja di website ini, terus masuk deh ke forum kita</p>
    <p style="font-weight:bold;font-size:15px;">gaperlu basa-basi lagi, langsung aja cek produk kita dibawah</p>
  </div>
</div>


@foreach($products->chunk(1) as $pc)
<div class="row">
  @foreach($pc as $p)
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{$p->imagepath}}" alt="..."  class="img-responsive" style="max-height:200px">
      <div class="caption">
        <h3>{{$p->title}}</h3>
        <p>{{$p->description}}</p>
        <div class="clearfix">
          <div class="pull-left price">Rp. {{$p->price}}.000</div>
          <p><a href="#" class="btn btn-success pull-right" role="button"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  @endforeach




<style>
  .price{
    font-weight: bold;
    font-size: 16px;
    color: rgb(41, 147, 10);
  }
  .forthy
  {
    font-weight: bold;
    font-size: 20px;
    color: rgb(0, 0, 0);
  }
</style>
@endsection

@section('scripts')
<script>
  $('.nav>li').removeClass('active');
  $('#home').addClass('active');

</script>
@endsection
