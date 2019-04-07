@extends('layouts.app')




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

        background: rgb(253,221,230);

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

    .intro1 > #intro .btn-get-started {
        font-size: 15px;
        font-weight: bold;
        letter-spacing: 1px;
        display: inline-block;
        padding: 10px 32px;
        border-radius: 2px;
        transition: 0.5s;
        margin: 10px;
        color: #fff;
        background: #84c75b;
    }

    .intro1 > #intro .btn-get-started:hover {
        color: #fff;
        background: #57a825;
        text-decoration: none;
 
    }
    .counter {
    background-color:#fff;
    padding: 20px 0;
    border-radius: 5px;
}
    </style>

@section('content')
    <div class="intro1">
        <section id="intro">
            <div class="intro-content">
                <h2>Welcome to Smart Piggy Bank!</h2>
                <h3>You can see your total balance in the counter and go to transaction details and failed transactions from the menu </h3>
            </div>
    </div>
</section>

    <div class="container" align="center">
        <div class="row">
            <br/>
        </div>
        <div class="row text-center">
            <div class="col">
                <div class="counter">
                    <i class="fa fa-2x">Your Balance:</i>
                    <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>

                </div>
                
            </div>
        </section>
    </div>


       

@endsection
