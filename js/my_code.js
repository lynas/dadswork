$('.save').click(function() {
    //alert($(".taka").val());

    var vn = $(".vn").val();
    var bib = $(".bib").val();
    var jork = $(".jork").val();
    var taka = $(".taka").val();
    var tarik = $(".tarik").val();


    $.ajax({
        url: '/ledgerbook/php/dbinsertnew.php?vn=' + vn + '&bib=' + bib + '&jork=' + jork + '&taka=' + taka + '&tarik=' + tarik,
        data: {varname: "value"},
        success: function(response) {
            alert(response);
        }
    });



});

function f1() {
    $.ajax({
        url: '/ledgerbook/php/dbgeneralget.php',
        data: {varname: "value"},
        success: function(response) {

            $(".start").html(response);
        }
    });



}



$('.addrow').click(function() {

    $('#myTable tr:last').after('<tr><td>3</td><td>4</td></tr>');

});


$('.cl').click(function() {
    alert($(".cl").html());

});


$('.addanewrow').click(function() {

    $('.joma tr:last').after('<tr> <td>1</td> <td>2</td> <td>3</td> <td>4</td> </tr>');

});

$('.sht').click(function() {

    alert($(".jomaOrKhoroch option:selected").text());

});