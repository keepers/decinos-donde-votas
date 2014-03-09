//Get all the provinces
$.ajax({
    type: 'POST',
    url: '../../api/getProvinces.php',
    dataType: 'json',
    cache: false,
    async: false,
    contentType: "application/json",
    beforeSend: function () {

    },
    success: function (provinces) {
        if(provinces.length != 0)
        {
            var code = '';
            $.each(provinces, function (k, v) {
                code += "<li><a onclick='getPeople(\""+v.place+"\")' href='#' tabindex='-1'>"+v.place+"</a></li>"
            })

            $(code).appendTo('.dropdown-menu');

        }
    },
    error: function (e) {
        console.log(e);
    }
});

function getPeople(prov)
{
    $.ajax({
        type: 'POST',
        url: '../../api/getPeople.php',
        data: {
            province: prov
        },
        dataType: 'json',
        cache: false,
        async: false,
        //jsonpCallback: 'status',
        beforeSend: function () {
		
        },
        success: function (people) {
	
	var code = '';
           $.each(people, function (k, v) {
                code += "<h3>"+v.name+" <a href=\"afiche?id="+v.id+"\">(Imprimir)</a></h3><br><img src=\""+v.photo+"\"><br><p>"+v.description+"</p>";
            })
		$('.people').empty();
            $(code).appendTo('.people');
        },
        error: function (e) {
            console.log(e);
        }
    });
}