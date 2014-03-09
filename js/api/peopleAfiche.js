function getPeople(id)
{
    $.ajax({
        type: 'POST',
        url: '../../api/getPeople.php',
        data: {
            id: id
        },
        dataType: 'json',
        cache: false,
        async: false,
        //jsonpCallback: 'status',
        beforeSend: function () {

        },
        success: function (people) {
            var code = "<img class=\"photo\" src=\""+people[0].photo+"\">";
                code += "<p class=\"description\">"+people[0].description+"</p>";

            $(code).appendTo('.bodyAfiche');
        },  
        error: function (e) {
            console.log(e);
        }
    });
}