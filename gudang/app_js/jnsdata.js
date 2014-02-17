$(document).on('ready',function(){
	table_jnsdata(); 
	
	$('button.tambah').on('click',function(){
		tambah();
	});
	
});

$(window).bind("load", function() {
    $('#loading').fadeOut(2000);
});

function table_jnsdata(){
	$.ajax({
        type: "POST",
        url : BASE_URL+"c_base/table_jnsdata",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
        	 	$('#dataTable').html(data);
        }
	});
}

function tambah(){
	$('#tambahJenisdata').dialog({
		title : 'Form Tambah Jenis Data',
		width : 'auto',
		height : 'auto',
		cache : false,
		show : 'fade',
		hide : 'fade',
	    resizable: false,
	    draggable : false,
	    position: ['center',40],
		modal : true,
		buttons: {
			'Simpan': function() {
				var kdjns = $('#kdjns').val();
				var namajns = $('#namadata').val();
				
				if (kdjns == ''){
					alert('Kode Jenis Data belum diisi');
				} else if(namajns == ''){
					alert ('Nama Jenis Data belum diisi');
				} else {
					simpanJenisdata(kdjns, namajns);
					$(this).dialog('close');
				}
			},
			'Close': function() { $(this).dialog('close'); }
		},
		resizable: false
	});
};

function simpanJenisdata(kdjns, namajns){
	var skdjns = kdjns;
	var snamajns = namajns;
	//alert(snamaprov);
	
	$.ajax({
		type: 'POST',
		url: BASE_URL+'c_jenisdata/simpan',
		data: { kdjns:skdjns, namajns:snamajns},
		success: function(data) {
			alert(data);
			table_jnsdata();
		}
	})
};