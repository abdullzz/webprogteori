@extends('layouts.master')

@section('title')
  Login Page
@endsection

@section('content')
<div class="">
  <form class="pure-form">
    <div class=" pure-control-group">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control pure-input-rounded" id="inputEmail" placeholder="Email">
    </div>
    <div class="pure-control-group">
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control pure-input-rounded" id="inputPassword" placeholder="Password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
@endsection
