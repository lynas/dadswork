$('.save').click(function() {
    //alert($(".taka").val());

    var vn = $(".vn").val();
    var bib = $(".bib").val();
    var biboron = $(".biboron").val();
    var jork = "";
    var taka = $(".taka").val();
    var tarik = $(".tarik").val();
    bib = $.trim(bib.replace("'", ''));

    if (document.getElementById('jomaRadio').checked) {
        jork = "Joma";
    } else if (document.getElementById('khorochRadio').checked) {
        jork = "Khoroch";
    }




    if (!vn) {
        alert("Empty Voucher No");
        return false;
    }
    if (isNaN(vn)) {
        alert("Invalid Voucher No");
        return false;
    }
    if (!taka) {
        alert("Invalid Taka");
        return false;
    }
    if (isNaN(taka)) {
        alert("Invalid Taka");
        return false;
    }
    if (!bib) {
        alert("Empty Name");
        return false;
    }
    if (!biboron) {
        alert("Empty Biboron");
        return false;
    }
    if (!jork) {
        alert("Select Joma / Khoroch");
        return false;
    }



    $.ajax({
        url: 'php/dbinsertnew.php?vn=' + vn + '&bib=' + bib + '&biboron=' + biboron + '&jork=' + jork + '&taka=' + taka + '&tarik=' + tarik,
        data: {varname: "value"},
        success: function(response) {
            alert(response);
            location.reload(true);
        }
    });


});

function showTodaysTransaction() {
    var tarik = $(".tarik").val();
    showDebit(tarik);
    showCredit(tarik);
    showPrevBib();


}
function showDebit(expdate) {
    $.ajax({
        url: 'php/dbgeneralget.php',
        data: {type: "credit", edate: expdate},
        success: function(response) {

            $('.khoroch tr:last').after(response);



        }
    });
}
function showCredit(expdate) {
    $.ajax({
        url: 'php/dbgeneralget.php',
        data: {type: "debit", edate: expdate},
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

function trimcoma(original) {
    var str1 = original;
    str1.replace(/\,/g, "");
    var str2 = str1.replace(/\,/g, "");

    return str2;

}

$('.addall').click(function() {

    var tds = document.getElementById('khoroch').getElementsByTagName('td');
    var sum = 0;
    for (var i = 0; i < tds.length; i++) {
        if (tds[i].className == 'cv') {
            sum += isNaN(trimcoma(tds[i].innerHTML)) ? 0 : parseFloat(trimcoma(tds[i].innerHTML));
        }
    }
    $('.totalkhoroch').html(sum);
    var tds = document.getElementById('joma').getElementsByTagName('td');
    var sum2 = 0;
    for (var i = 0; i < tds.length; i++) {
        if (tds[i].className == 'cv') {
            sum2 += isNaN(trimcoma(tds[i].innerHTML)) ? 0 : parseFloat(trimcoma(tds[i].innerHTML));
        }
    }
    $('.totaljoma').html(sum2);
    var x = parseFloat($(".totaljoma").html());
    var y = parseFloat($(".totalkhoroch").html());
    $('.remaining').html(x - y);

});



$(document).on('click', '.rid', function() {
    var r = confirm("Do You Really want to delete??");
    if (r === true)
    {
        $.ajax({
            url: 'php/deleterow.php',
            data: {deleterownum: $(this).html()},
            success: function(response) {
                alert(response);
                location.reload(true);
            }
        });
    }
    else
    {
        location.reload(true);
    }

});


$(document).on('click', '.desc', function() {
    alert($(this).html());


});



$(document).on('change', '.previousBiboron', function() {

    $('.bib').val(this.value);
});

function showTotalBalanceSheet() {
    $.ajax({
        url: 'php/getcompletebalancesheet.php',
        data: {type: "null"},
        success: function(response) {
            $('.totalbalance tr:last').after(response);

        }
    });
}
function showPrevBiboron() {
    // $('.previousBiboron').append($('<option>', {value: 1, text: 'My option'}), $('<option>', {value: 2, text: 'My option2'}));
    $.ajax({
        url: 'php/populatenames.php',
        data: {nan: ""},
        success: function(response) {
            $('.indiusers').append(response);

        }
    });

    //alert("working");
}
$(document).on('change', '.indiusers', function() {
    $('#selectedUser').html(this.value);
    indishowDebit(this.value);
    indishowCredit(this.value);
});

function indishowDebit(user) {


    $.ajax({
        url: 'php/getindiall.php',
        data: {type: "credit", user: user},
        success: function(response) {

            $('.khoroch tr:last').after(response);
        }
    });
}
function indishowCredit(user) {
    $.ajax({
        url: 'php/getindiall.php',
        data: {type: "debit", user: user},
        success: function(response) {

            $('.joma tr:last').after(response);
        }
    });
}




$(".reload").click(function() {
    location.reload(true);
});

$(".getbf").click(function() {
    $.ajax({
        url: 'php/getquery.php',
        data: {query: "bf"},
        success: function(response) {
            $("#bfsection").html(response);
            //alert(response);
        }
    });
});


$(".showTotalJomaKhoroch").click(function() {

    var tds = document.getElementById('totalbalance').getElementsByTagName('td');
    var sum = 0;
    for (var i = 0; i < tds.length; i++) {
        if (tds[i].className == 'balanceSheetTotalJomaInividualCell') {
            sum += isNaN(trimcoma(tds[i].innerHTML)) ? 0 : parseFloat(trimcoma(tds[i].innerHTML));
        }
    }



    $('.balancesheetTotalJoma').html(sum);

    var tds = document.getElementById('totalbalance').getElementsByTagName('td');
    var sum2 = 0;
    for (var i = 0; i < tds.length; i++) {
        if (tds[i].className == 'balanceSheetTotalKhorochInividualCell') {
            sum2 += isNaN(trimcoma(tds[i].innerHTML)) ? 0 : parseFloat(trimcoma(tds[i].innerHTML));
        }
    }
    $('.balancesheetTotalKhoroch').html(sum2);
    $('.balancesheetTotalObosisto').html(sum - sum2);


});







$(".getpreviousjabeda").click(function() {
    var dd = $("#prevd").val();

    showDebit(dd);
    showCredit(dd);

});




$('#formatedTaka').click(function() {
    var taka = $(".taka").val();
     if (!taka) {
        alert("Invalid Taka");
        return false;
    }
    if (isNaN(taka)) {
        alert("Invalid Taka");
        return false;
    }

    //alert($(".taka").val());
    $.ajax({
        url: 'php/generalFunctions.php',
        data: {callid: "formatTaka", myTaka:$(".taka").val()},
        success: function(response) {
            //$("#bfsection").html(response);
            $('#formatedTakaOutput').html(response);
        }
    });



});