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
         <!--  <li class="active"><a href="#1" data-toggle="tab"><i class="icon-briefcase"></i> @php echo $user_names[1];@endphp</a></li>
            -->
            @for ($i=1; $i<=sizeof($all); $i++)
             <li><a href="#{{$i}}" data-toggle="tab">{{$user_names[$i]}}</a></li>
                @endfor
        </ul>

        <div class="tab-content">
            <div id="mytable"></div>
            @for ($i=1; $i<=sizeof($all); $i++)

            <div class="tab-pane" id="{{$i}}">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th> Hour </th>
                        <th> Money Thrown</th>
                        <th> Evidence </th>
                    </tr>
                    </thead>
                    @for($j=0; $j<sizeof($all[$i]);$j++)

                    <tbody>
                    <tr>
                        <td>{{$all[$i][$j]["hour"]}}</td>
                        <td>{{$all[$i][$j]["balance"]}}</td>
                        <td><a href="#" class="button-to-click">Image Link</a>  </td>
                    </tr>
                    @endfor
                    </tbody>

                </table>

            </div>
            @endfor


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
<div class="popup">
    Transaction css not binding for popup??
</div>


@endsection

<div class="popup-container" style="display: none; position: fixed; z-index: 999"; >
<img src="assets/img/piggy.jpeg">
    <a class="popup-close" href="#">Close</a></div>



<script src="js/calendar.js"></script>

        <script>
            document.getElementById('mytable').innerHTML = myTable;
        </script>


<script>
    $(document).ready(function() {
        // config
        popup = $('.popup-container');
        clickme = $('.button-to-click');

        // pop-up
        vh = $(window).height();
        vw = $(window).width();
        bw = popup.width();
        bh = popup.height();
        clickme.click(function(e) {
            e.preventDefault();
            popup.fadeOut();
            popup.css('left', vw/2 - bw/2);
            popup.css('top', vh/2 - bh/2);
            popup.fadeIn();
        });
        //close button
        $('.popup-close').click(function() {
            $('.popup-container').fadeOut();
        });
    });
</script>