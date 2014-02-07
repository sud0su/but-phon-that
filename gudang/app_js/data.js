$(document).ready(function(){
	
	$('div#kab').on('click',function(){
		kabupaten();
	});
	
	$('div#kec').on('click',function(){
		kecamatan();
	});
	
});

function kabupaten(){
	$.ajax({
        type: "POST",
        url : BASE_URL+"c_base/view_kab",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        beforeSend : function(jqXHR,setting){
                 $('#data').html('Loading.....');
             },
        success: function(data){
        	 	$('#data').html(data);
        }
	});
};

function kecamatan(){
	$.ajax({
        type: "POST",
        url : BASE_URL+"c_base/view_kab",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        beforeSend : function(jqXHR,setting){
                 $('#data').html('Loading.....');
             },
        success: function(data){
        	 	$('#data').html(data);
        }
	});
};