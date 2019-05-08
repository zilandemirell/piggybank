
@extends('layouts.app')

<style>
body {
  background: url("assets/img/introBG.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}

    </style>

@section('content')
   

<!-- Page Content -->
<div class="container" align="center">
        <div style="height: 200px"></div>
    <h1 style="color:white; font-weight:bold;" >Welcome to the smart piggy bank!</h1>
    <h3 style="color:white; font-weight:bold;" ><p>This website is the belong to the Smart Piggy Bank and used for viewing transactions in the bank.</p></h3>
        <h3 style="color:white; font-weight:bold;" ><p>You need to login or register to use the website.</p></h3>
    <a href="./login" class="btn btn-rounded btn-large btn-info">Login</a>
    <a href="./register" class="btn btn-rounded btn-large btn-info">Register</a>  
</div>
@endsection
