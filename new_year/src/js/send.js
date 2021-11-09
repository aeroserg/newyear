$("#form_to").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(form_to);
    var url = 'https://ancor-group.com/happynewyear/newy.php';
    
    $.ajax({
           type: "POST",
           url: url,
           data: "{akey : 'asdLAKSDMlwq9384asor39qalaflanasa', email : 's.annenkov@ancor.ru'}",
           contentType: "application/json; charset=utf-8",
            dataType: "json",
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
         });

    
});