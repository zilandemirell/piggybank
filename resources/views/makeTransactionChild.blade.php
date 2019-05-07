@extends('layouts.childLayout.app')

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
    <h1 class="font-weight-light">Click the button for a new transaction</h1>
    <a href="#opendoor" class="btn btn-rounded btn-large btn-info">New Transaction</a>
  
  </div>
</div>
</div>
@endsection
<script>

$("#opendoor").click(
        function () {
          $.ajax({
            type:"POST",
            url : "session/openDoor",
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {


            }
        })}
)

</script>
