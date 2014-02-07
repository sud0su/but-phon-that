$(document).ready(function(){
	tabs_data();
	
	$('div#home').on('click',function(){
		tabs_data();
	});
	
	$('div#kab').on('click',function(){
		kabupaten();
	});
	
	$('div#kec').on('click',function(){
		kecamatan();
	});

	$('div#ins').on('click',function(){
		instansi();
	});
	
});

$(window).bind("load", function() {
    $('#dvLoading').fadeOut(2000);
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

function kecamatan(){
	$.ajax({
        type: "POST",
        url : BASE_URL+"c_base/view_kec",
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
}