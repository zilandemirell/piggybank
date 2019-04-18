



/*$(document).ready(function () {
        $("#my-calendar").zabuto_calendar({
            ajax: {
                //url: "show_data.php",
                modal: true
            }
        });
    });*/

    <!-- use fixed data -->


    var eventData = [
    {"date":"2019-04-01","badge":false,"title":"Example 1"},
    {"date":"2019-04-02","badge":false,"title":"Example 2"},
    {
        "date":"2019-04-20",
        "badge":false,
        "title":"Tonight",
        "body":"<p class=\"lead\">Party<\/p><p>Like it's 1999.<\/p>",
        "footer":"At Paisley Park",
    }
];

    $(document).ready(function () {
    $("#my-calendar").zabuto_calendar({
        data: eventData,

        action: function () {
            var a = (this.id);
            parts = a.split('_');
            value = parts.pop();
            var data = {"date" : value};
            $.ajax({
                type: "POST",
                url: 'session/dateValue',
                data: data,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    console.log("başarılı", value);
                    console.log(data);
                    //console.log("response", response);
                    if(data.success == true){
                    $('#temp').html(data.html)
                    $;
                }
                    else{
                        alert('No Transactions');
                    }
                },
                error: function() {
                    alert('No Transactions');
                }

            });

        }


    });

});

