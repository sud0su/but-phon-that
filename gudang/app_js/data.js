$(document).ready(function(){
	tabs_data();
	
	$('div#home').on('click',function(){
		tabs_data();
	});	
	$('div#kab').on('click',function(){
		kabupaten();
	});	
	$('div#pro').on('click',function(){
		propinsi();
	});
	$('div#ins').on('click',function(){
		instansi();
	});
	$('div#bid').on('click',function(){
		bidang();
	});
	$('div#kas').on('click',function(){
		kasus();
	});

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