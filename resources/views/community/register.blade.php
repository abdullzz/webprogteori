@extends('layouts.master')

@section('title')
  New Account Registration
@endsection

@section('content')
<div class="form-vertical panel-primary" style="padding-top:50px;">
  <div class="panel-heading">
    Form Registrasi
  </div>
  {{ csrf_field() }}
	<form method="post" action="{{ URL('/register')}}" class="col-4 panel-footer">
		<div class="form-group">
			<label for="name"> Nama
			</label>
			<input type="text" id="name" name="name" class="form-control">
		</div>
    <div class="form-group">
			<label for="name"> Line ID atau Nomor Hp.
			</label>
			<input type="text" id="contact" name="contact" class="form-control">
		</div>
		<div class="form-group">
			<label for="email"> Email
			</label>
			<input type="email" id="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label for="password"> Password
			</label>
			<input type="password" id="password" name="password" class="form-control">
		</div>
		<div class="form-group">
			<label for="password_confirmation"> Confirm Password
			</label>
			<input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success"> <h5 style="color:black;font-weight:bold;">Register</h5> </button>
      <p style="float:right;font-style:italic;">Data yang anda kirim akan tersimpan secara rahasia</p>
		</div>
	</form>
</div>

@endsection

@section('styles')
  <style>
    .panel-footer{
      background-color: rgb(143, 168, 255);
    }
    .bckcolor{
      background-image: url('/img/pexels2.jpeg');
      background-size: cover;
    }
    .panel-primary
    {

    }
  </style>
@endsection

@section('scripts')
<script>
  $('#bck').addClass('bckcolor');
</script>
@endsection
