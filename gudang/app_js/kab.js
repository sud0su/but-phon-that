$(document).ready(function(){
	table_kab();
});

$(window).bind("load", function() {
    $('#loading').fadeOut(2000);
});

function table_kab(){
	$.ajax({
        type: "POST",
        url : BASE_URL+"c_base/table_kab",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
        	 	$('#dataTable').html(data);
        }
	});
}
