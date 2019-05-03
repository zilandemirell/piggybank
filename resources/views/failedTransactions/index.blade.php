@extends('layouts.parentLayout.app')
<meta name="csrf-token" content="{{ csrf_token() }}">


<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/transaction.css" rel="stylesheet">


@section('content')
    <div id='Transactions'>
        <div class="mainContainer row-fluid">
            <div class="transactionTab span6">
                <div class="table" id="temp">

                    <h4>Failed Transaction Records</h4>


                    <ul class="nav nav-tabs">

                        @foreach ($user_names as $users)
                            <li><a href="#{{$users->id}}" data-toggle="tab">{{$users->name}}</a></li>
                        @endforeach
                    </ul>

                    <div class="tab-content">

                        <div id="mytable"></div>
                        @foreach ($user_names as $users)

                            <div class="tab-pane" id="{{$users->id}}">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> Hour</th>
                                        <th> Money Thrown</th>
                                        <th> Evidence</th>
                                    </tr>
                                    </thead>
                                    @if (empty($all[$users->id]) )
                                        No Transaction Found
                                    @else
                                    @foreach($all[$users->id] as $transaction)

                                        <tbody>
                                        <tr>
                                            <td>{{$transaction->hour}}</td>
                                            <td>{{$transaction->balance}}</td>
                                            <td><a href="#" class="button-to-click">Image Link</a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    @endif
                                </table>

                            </div>
                        @endforeach


                    </div>

                </div>

            </div>
            <div class="container span6">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div id="my-calendar"></div>

                    </div>
                </div>
            </div>

            <div class="popup-container">
                <img src="assets/img/piggy.jpeg">
                <a class="popup-close" href="#">Close</a>
            </div>
        </div>
    </div>


@endsection



<script id="calendar_route" my_url ="session/dateFValue" src="js/calendar.js"></script>



<script>
    $(document).ready(function () {
        // config
        popup = $('.popup-container');
        clickme = $('.button-to-click');

        // pop-up
        vh = $(window).height();
        vw = $(window).width();
        bw = popup.width();
        bh = popup.height();
        clickme.click(function (e) {
            e.preventDefault();
            popup.fadeOut();
            popup.css('left', vw / 2 - bw / 2);
            popup.css('top', vh / 2 - bh / 2);
            popup.fadeIn();
        });
        //close button
        $('.popup-close').click(function () {
            $('.popup-container').fadeOut();
        });
    });
</script>
