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
            location.reload();
        }
    });
});

function showTodaysTransaction() {
    showDebit();
    showCredit();
    showPrevBib();

}
function showDebit() {
    $.ajax({
        url: 'php/dbgeneralget.php',
        data: {type: "credit"},
        success: function(response) {
            $('.khoroch tr:last').after(response);
        }
    });
}
function showCredit() {
    $.ajax({
        url: 'php/dbgeneralget.php',
        data: {type: "debit"},
        success: function(response) {
            $('.joma tr:last').after(response);
        }
    });
}
function showPrevBib() {
   // $('.previousBiboron').append($('<option>', {value: 1, text: 'My option'}), $('<option>', {value: 2, text: 'My option2'}));
   $.ajax({
        url: 'php/populatenames.php',
        data: {nan: ""},
        success: function(response) {
            $('.previousBiboron').append(response);
           
           //alert(response);
        }
    });
    
   //alert("working");
}


$('.addall').click(function() {
    var tds = document.getElementById('khoroch').getElementsByTagName('td');
    var sum = 0;
    for (var i = 0; i < tds.length; i++) {
        if (tds[i].className == 'cv') {
            sum += isNaN(tds[i].innerHTML) ? 0 : parseFloat(tds[i].innerHTML);
        }
    }
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
    $('.remaining').html(x - y);
});



$(document).on('click', '.rid', function() {
        $.ajax({
        url: 'php/deleterow.php',
        data: {deleterownum: $(this).html()},
        success: function(response) {
           alert(response);
           location.reload();
        }
    });
});


$(document).on('click', '.desc', function() {
    //alert($(this).html());
    

});



$(document).on('change', '.previousBiboron', function() {
  alert( this.value ); // or $(this).val()
});



























