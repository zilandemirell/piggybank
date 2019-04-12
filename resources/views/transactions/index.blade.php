@extends('layouts.app')


<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/transaction.css" rel="stylesheet">


@section('content')
    <div id='Transactions'>
<div class="mainContainer row-fluid">
    <div class="transactionTab span6">
        <h4>Transaction Records</h4>



        <ul class="nav nav-tabs">
         <!--  <li class="active"><a href="#1" data-toggle="tab"><i class="icon-briefcase"></i> @php echo $user_names[0];@endphp</a></li>
            -->
            @php for ($i=0; $i<sizeof($user_names); $i++) : @endphp
            <li><a href="#@php echo $i; @endphp" data-toggle="tab"> <?php echo $user_names[$i]; ?>  </a></li>
            @php endfor; @endphp
        </ul>

        <div class="tab-content">
            @php for ($i=0; $i<sizeof($all); $i++) : @endphp
            <div id="mytable"></div>
            <div class="tab-pane" id="@php echo $i;@endphp">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th> Hour </th>
                        <th> Money Thrown</th>
                        <th> Evidence </th>
                    </tr>
                    </thead>
                    @php for($j=0; $j<sizeof($all[$i+1]);$j++):@endphp

                    <tbody>
                    <tr>
                        <td>@php echo $all[$i+1][$j]["hour"]@endphp</td>
                        <td>@php echo $all[$i+1][$j]["balance"]@endphp</td>
                        <td><a>Image Link</a>  </td>
                    </tr>
                    @php endfor; @endphp
                    </tbody>

                </table>

            </div>
            @php endfor; @endphp


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
    </div>

@endsection
<script src="js/calendar.js"></script>
        <script>
            document.getElementById('mytable').innerHTML = myTable;

        </script>