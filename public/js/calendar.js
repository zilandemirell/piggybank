


/*$(document).ready(function () {
        $("#my-calendar").zabuto_calendar({
            ajax: {
                //url: "show_data.php",
                modal: true
            }
        });
    });*/





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
var page_url = document.getElementById("calendar_route").getAttribute("my_url");

$(document).ready(function () {
    console.log('document ready, MainTransTutucu=',$('#MainTransTutucu'));
    //console.log(transData);
    $("#my-calendar").zabuto_calendar({
        data: eventData,
        page_url : page_url,
        action: function () {
            var a = (this.id);
            parts = a.split('_');
            value = parts.pop();
            var data = {"date" : value};
            $.ajax({
                type: "POST",
                url: page_url,
                data: data,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    console.log(value);
                    console.log(data);
                    console.log(page_url);
                    //console.log("response", response);
                    if(data.success == false){
                        alert('No Transactions');

                    }console.log(data.success);
                    $('#MainTransTutucu').empty().append(data.html);

                },
                error: function() {
                    alert('No Transactions');
                    console.log(page_url);
                    console.log(data);

                }

            });

        }


    });

});

