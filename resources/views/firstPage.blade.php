
@extends('layouts.app')

<style>
body {
  background: url("assets/img/piggy.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
    </style>

@section('content')
   

<!-- Page Content -->
<div class="container" align="center">
<div class="card border-0 shadow my-5">
  <div class="card-body p-5">
        <div style="height: 200px"></div>
    <h1 class="font-weight-light">>Welcome to the smart piggy bank!!</h1>
    <p class="lead">This website is the belong to the Smart Piggy Bank and used for viewing transactions in the bank.</p>
    <p class="lead">You need to login or register to use the website.</p>
    <a href="./login" class="btn btn-rounded btn-large btn-info">Login</a>
    <a href="./register" class="btn btn-rounded btn-large btn-info">Register</a>  
  </div>
</div>
</div>
@endsection
