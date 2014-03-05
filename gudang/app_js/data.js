$(document).ready(function(){
    tabs_data();
	
    $('a#home').on('click',function(){
        tabs_data();
    });
    $('a#kab').on('click',function(){
        kabupaten();
    });
    $('a#pro').on('click',function(){
        propinsi();
    });
    $('a#ins').on('click',function(){
        instansi();
    });
    $('a#bid').on('click',function(){
        bidang();
    });
    $('a#kas').on('click',function(){
        kasus();
    });

//kasus//
    $('a#dataPilih').on('click',function(){
        dataPilih();
    });

    $('a#dataAnak').on('click',function(){
        dataAnak();
    });
    $('a#dataKelembagaan').on('click',function(){
        dataKelembagaan();
    });
//endkasus//

    $("#accordian h3").click(function(){
        //slide up all the link lists
        $("#accordian ul ul").slideUp();
        //slide down the link list below the h3 clicked - only if its closed
        if(!$(this).next().is(":visible"))
        {
            $(this).next().slideDown();
        }
    })

});

$(window).bind("load", function() {
    $('#loading').fadeOut(2000);
});

function tabs_data(){
    $.ajax({
        type: "POST",
        url : BASE_URL+"c_base/view_tab",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
            $('#data').html(data);
        }
    });
}

function kabupaten(){
    $.ajax({
        type: "POST",
        url : BASE_URL+"c_base/view_kab",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
            $('#data').html(data);
        }
    });
};

function propinsi(){
    $.ajax({
        type: "POST",
        url : BASE_URL+"c_base/view_pro",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
            $('#data').html(data);
        }
    });
};

function instansi(){
    $.ajax({
        type: "POST",
        url : BASE_URL+"c_base/view_ins",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
            $('#data').html(data);
        }
    });
};

function bidang(){
    $.ajax({
        type: "POST",
        url : BASE_URL+"c_base/view_bid",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
            $('#data').html(data);
        }
    });
};


function dataPilih(){
    $.ajax({
        type: "POST",
        url : BASE_URL+"c_base/dataPilih",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
            $('#data').html(data);
        }
    });
};


function dataAnak(){
    $.ajax({
        type: "POST",
        url : BASE_URL+"c_base/dataAnak",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
            $('#data').html(data);
        }
    });
};

function dataKelembagaan(){
    $.ajax({
        type: "POST",
        url : BASE_URL+"c_base/dataKelembagaan",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
            $('#data').html(data);
        }
    });
};