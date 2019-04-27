
    <div class="table" >

        <h4>Transaction Records</h4>


        <ul class="nav nav-tabs">
        <!--  <li class="active"><a href="#1" data-toggle="tab"><i class="icon-briefcase"></i> @php //echo $user_names[1];@endphp</a></li>-->


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

