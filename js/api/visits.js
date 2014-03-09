$.ajax({
    type: 'POST',
    url: '../../api/getCounter.php',
    dataType: 'json',
    cache: false,
    async: false,
    contentType: "application/json",
    beforeSend: function () {

    },
    success: function (status) {
        var texto = "Ya se sumaron " + status[0].counter + " personas!";
        $('.counter').html(texto);
        incrementCounter();
    },
    error: function (e) {
        console.log(e);
    }
});

function incrementCounter()
{
   $.ajax({
        type: 'POST',
        url: '../../api/setCounter.php',
        dataType: 'json',
        cache: false,
        async: false,
        contentType: "application/json",
        beforeSend: function () {

        },
        success: function (status) {
           console.log(status);
        },
        error: function (e) {
            console.log(e);
        }
    });
}