@extends('layouts.parentLayout.app')




<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="assets/css/counter.css" rel="stylesheet">

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<style>
.intro1>#intro {
        width: 100%;
        height: 40vh;
        position: relative;
        
        background-size: cover;
    }

    @media (min-width: 1024px) {
        .intro1 > #intro {
            background-attachment: fixed;
        }
    }

    .intro1 > #intro .intro-content  {

        background: rgb(242, 177, 176);

        position: absolute;
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
        z-index: 10;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        padding: 0 15px;
    }

    .intro1 > #intro .intro-content  h2 {
        color: #fff;
        margin-bottom: 30px;
        font-size: 64px;
        font-weight: 700;
    }

    .intro1 >.intro-content  h3 {
        color: #fff;
        margin-bottom: 30px;
        font-size: 26px;
        font-weight: 500;
    }

    @media (max-width: 767px) {
        .intro1 > #intro {
            height: 100vh;
        }
        .intro1 > .intro-content  h2 {
            font-size: 34px;
        }
    }

   
   
    .counter {
    background-color:#fff;
    padding: 20px 0;
    border-radius: 5px;
}
.col_half { width: 49%; }
  .col_third { width: 32%; }
  .col_fourth { width: 23.5%; }
  .col_fifth { width: 18.4%; }
  .col_sixth { width: 15%; }
  .col_three_fourth { width: 74.5%;}
  .col_twothird{ width: 66%;}
  .col_half,
  .col_third,
  .col_twothird,
  .col_fourth,
  .col_three_fourth,
  .col_fifth{
      position: relative;
      display:inline;
      display: inline-block;
      float: left;
      margin-right: 2%;
      margin-bottom: 20px;
  }
  .end { margin-right: 0 !important; }
  /* Column Grids End */
    </style>

@section('content')

<div class="intro1">
        <section id="intro">

            <div class="intro-content">
                <h2>Welcome to Smart Piggy Bank!</h2>
                <h3>You can see your total balance in the counter and go to transaction details and failed transactions from the menu </h3>
            </div>
        </section>
    </div>
    @foreach ($userBalance as $userName => $totalBalance)

            
    <div class="counter col_fourth">
        <div align="center"><i class="fa fa-2x">{{$userName}}</i></div>
        
        <h2 style="color:#f2b1b0" class="timer count-title count-number" data-to="{{$totalBalance}}" data-speed="900"></h2>
    </div>
                
                
    
    @endforeach 

   
@endsection
