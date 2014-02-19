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
    $('a#jns').on('click',function(){
        jnsdata();
    });

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

function kasus(){
    $.ajax({
        type: "POST",
        url : BASE_URL+"c_base/view_kasus",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
            $('#data').html(data);
        }
    });
};

function jnsdata(){
    $.ajax({
        type: "POST",
        url : BASE_URL+"c_base/view_jnsdata",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
            $('#data').html(data);
        }
    });
};