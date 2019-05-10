@extends('layouts.parentLayout.app')
<meta name="csrf-token" content="{{ csrf_token() }}">


<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/transaction.css" rel="stylesheet">


@section('content')
    <div id='Transactions'>
        <h4>Transaction Records</h4>

        <div class="mainContainer row-fluid">
            <div id="MainTransTutucu" class="transactionTab span6">


            @component('transactions.transTable', ['user_names'=>$user_names, 'all'=>$all, "parents"=>$parents])
                    @endcomponent


            </div>
            <div class="container span6">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div id="my-calendar"></div>

                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection


<script id="calendar_route" my_url="session/dateValue" src="js/calendar.js"></script>
