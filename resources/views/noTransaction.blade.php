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
    <h1 class="font-weight-light">There is no transaction yet!</h1>
    <p class="lead">You can start saving now in piggy bank and come back here soon!</p>
    
  
  </div>
</div>
</div>
@endsection
