
    <div class="table" >


        <ul class="nav nav-tabs">
        <!--  <li class="active"><a href="#1" data-toggle="tab"><i class="icon-briefcase"></i> @php //echo $user_names[1];@endphp</a></li>-->




            @foreach ($user_names as $users)
                <li><a href="#{{$users->id}}" data-toggle="tab">

                            {{$users->name}}</a></li>

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
                            @foreach($all[$users->id]->sortByDesc('id') as $transaction)

                                <tbody>
                                <tr>
                                    <td>{{$transaction->hour}}</td>
                                    <td>{{$transaction->balance}}</td>
                                    <td><a id="{{$transaction->proof}}" href="#" class="button-to-click">Image Link</a></td>
                                </tr>

                                <input id="dates" type="hidden" value="{{$transaction->date}}">
                                @endforeach
                                </tbody>
                                @endif
                    </table>

                    <div class="popup-container">
                        <img src="">
                        <a class="popup-close" href="#">Close</a>
                    </div>


                </div>
            @endforeach


        </div>

    </div>
<script>


</script>
    <script>


        $(document).ready(function () {
            // config
            popup = $('.popup-container');
            clickme = $('.button-to-click');
           // source = $('#myvalue');
            // pop-up
            vh = $(window).height();
            vw = $(window).width();
            bw = popup.width();
            bh = popup.height();
            clickme.on('click', function(e)
                {
                    $source = $(this).attr('id');
                    popup.children('img').attr('src',$source);
                    e.preventDefault();
                    popup.fadeOut();
                    popup.css('left', vw / 2 - bw / 2);
                    popup.css('top', vh / 2 - bh / 2);
                    popup.fadeIn();
                }
            );

            //close button
            $('.popup-close').click(function () {
                $('.popup-container').fadeOut();
            });
        });
    </script>

