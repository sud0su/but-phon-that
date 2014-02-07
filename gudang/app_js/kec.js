$(document).ready(function(){
	table_kec();
});

$(window).bind("load", function() {
    $('#dvLoading').fadeOut(2000);
});

function table_kec(){
	$.ajax({
        type: "POST",
        url : BASE_URL+"c_base/table_kec",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
        	 	$('#dataTable').html(data);
        }
	});
}
