@extends('layouts.app')


<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/transaction.css" rel="stylesheet">


@section('content')
    <div class="mainContainer row-fluid">
        <div class="transactionTab span6">

            <h4>Transaction Records</h4>

            <ul class="nav nav-tabs">
                <li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> Mehmet</a></li>
                <li><a href="#two" data-toggle="tab"> İrem </a></li>
                <li><a href="#three" data-toggle="tab"> Zilan </a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="one">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> Hour </th>
                            <th> Money Thrown</th>
                            <th> Evidence </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>01:00</td>
                            <td>25</td>
                            <td><a>Image Link</a>  </td>
                        </tr>
                        <tr>
                            <td>02:00</td>
                            <td>64</td>
                            <td><a>Image Link</a>  </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>45</td>
                            <td><a>Image Link</a>  </td>
                        </tr>
                        </tbody>
                    </table>


                </div>
                <div class="tab-pane" id="two">
                    <p>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> Hour </th>
                            <th> Money Thrown</th>
                            <th> Evidence </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                        </tr>
                        </tbody>
                    </table>                </p>
                </div>
                <div class="tab-pane" id="three">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> Hour </th>
                            <th> Money Thrown</th>
                            <th> Evidence </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                        </tr>
                        </tbody>
                    </table>
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




    </div>


@endsection
<script src="js/calendar.js"></script>