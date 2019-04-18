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
    <h1 class="font-weight-light">Fixed Full Page Background Image</h1>
    <p class="lead">In this snippet, the background image is fixed to the body element. Content on the page will scroll, but the image will remain in a fixed position!</p>
    <a href="#" class="btn btn-rounded btn-large btn-info">Large size</a>
  
  </div>
</div>
</div>
@endsection
