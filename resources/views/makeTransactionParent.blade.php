@extends('layouts.parentLayout.app')
<meta name="csrf-token" content="{{ csrf_token() }}">

<style>
  body {
    background: url("assets/img/piggy.jpg") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
  }
</style>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

@section('content')


  <!-- Page Content -->
  <div class="container" align="center">
    <div class="card border-0 shadow my-5">
      <div class="card-body p-5">
        <div style="height: 200px"></div>
        <h1 class="font-weight-light">Click the button for a new transaction</h1>
        <a id='opendoor' href="#" class="btn btn-rounded btn-large btn-info">New Transaction</a>

      </div>
    </div>
  </div>
@endsection
<script>
  $(document).ready(function(){
    console.log("ready");
    $("#opendoor").on('click',
            function () {
              //alert( "Handler for .click() called." );
              $.ajax({
                type:"POST",
                url : "session/openDoor",
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
<<<<<<< HEAD
<<<<<<< HEAD
                  if(response){
                    console.log("başarılı", response);
=======
                  console.log(response);
                  if(response=="true"){
>>>>>>> 2f9231f1e02b5fe641cd3d5ee2ad5c1d908a7aa6
=======

                  console.log(response);
                  if(response=="true"){

>>>>>>> 4489e93a339252d8c87393bc988661042c8afa33
                alert ("Your Transaction saved succesfully");
                  }
                 
                else{
                  alert("Transaction process failed");
                }}
              })}
    );
  });

</script>
