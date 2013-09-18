$('.save').click(function() {
    //alert($(".taka").val());

    var vn = $(".vn").val();
    var bib = $(".bib").val();
    var jork = $(".jomaOrKhoroch option:selected").text();
    var taka = $(".taka").val();
    var tarik = $(".tarik").val();


    $.ajax({
        url: 'php/dbinsertnew.php?vn=' + vn + '&bib=' + bib + '&jork=' + jork + '&taka=' + taka + '&tarik=' + tarik,
        data: {varname: "value"},
        success: function(response) {
            alert(response);
        }
    });



});

function showTodaysTransaction() {
    showDebit();
    showCredit();




}
function showDebit() {
    $.ajax({
        url: 'php/dbgeneralget.php',
        data: {type: "credit"},
        success: function(response) {

            //$(".start").html(response);
            $('.khoroch tr:last').after(response);
        }
    });
}
function showCredit() {
    $.ajax({
        url: 'php/dbgeneralget.php',
        data: {type: "debit"},
        success: function(response) {

            //$(".start").html(response);
            $('.joma tr:last').after(response);
        }
    });
}



$('.addall').click(function() {
    

    var tds = document.getElementById('khoroch').getElementsByTagName('td');
    var sum = 0;
    for (var i = 0; i < tds.length; i++) {
        if (tds[i].className == 'cv') {
            sum += isNaN(tds[i].innerHTML) ? 0 : parseFloat(tds[i].innerHTML);
        }
    }
    
    //alert(sum);
    
    $('.totalkhoroch').html(sum);
    
    
    var tds = document.getElementById('joma').getElementsByTagName('td');
    var sum2 = 0;
    for (var i = 0; i < tds.length; i++) {
        if (tds[i].className == 'cv') {
            sum2 += isNaN(tds[i].innerHTML) ? 0 : parseFloat(tds[i].innerHTML);
        }
    }
    
    $('.totaljoma').html(sum2);
    
    var x = parseFloat($(".totaljoma").html());
    var y = parseFloat($(".totalkhoroch").html());
    $('.remaining').html(x-y);

});