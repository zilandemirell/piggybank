@extends('layouts.app')

<link href="assets/css/counter.css" rel="stylesheet">
<style>.intro1>#intro {
        width: 100%;
        height: 60vh;
        position: relative;
        background: url(../img/intro-background.jpg) top center;
        background-size: cover;
    }

    @media (min-width: 1024px) {
        .intro1 > #intro {
            background-attachment: fixed;
        }
    }

    .intro1 > #intro .intro-content  {
        background: rgba(0, 0, 0, 0.65);
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
    }</style>
@section('content')
    <div class="intro1">
        <section id="intro">
        <div class="intro-content">
                <h2>Welcome to Remember!</h2>
                <h3>Lorem ipsum dolor sit amet, elit persecuti efficiendi</h3>
                <div>
                    <a href="" class="btn-get-started scrollto">Get Started</a>
                </div>
            </div>
        </section>
    </div>
        <div class="container" align="center">
            <div class="row">
                <br/>
                <div class="col text-center">
                    <h2>YOUR TOTAL BALANCE</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <div class="counter">
                        <i class="fa fa-code fa-2x"></i>

                        <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>

                    </div>
                </div>
            </div>
        </div>
@endsection