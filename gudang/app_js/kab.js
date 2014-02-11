$(document).on('ready',function(){
	table_kab(); 
	
	$('button.tambah').on('click',function(){
		tambah();
	});
	
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

function tambah(){
	$('#tambahKabupaten').dialog({
		title : 'Form Tambah Data Kabupaten',
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
				var kdprov = $('#kdprov').val();
				var kdkab = $('#kdkab').val();
				var namakab = $('#namakab').val();
				if (kdprov == ''){
					alert('Kode kabupaten belum diisi');
				} else if(kdkab == ''){
					alert ('Kode Kabupaten belum diisi');
				} else if(namakab == ''){
					alert ('Nama Kabupaten belum diisi');
				} else {
					simpanKabupaten(kdprov, kdkab, namakab);
					$(this).dialog('close');
				}
			},
			'Close': function() { $(this).dialog('close'); }
		},
		resizable: false
	});
};

function simpanKabupaten(kdprov, kdkab, namakab){
	var skdprov = kdprov;
	var skdkab = kdkab;
	var snamakab = namakab;
	//alert(snamaprov);
	
	$.ajax({
		type: 'POST',
		url: BASE_URL+'c_kabupaten/simpan',
		data: { kdprov:skdprov, kdkab:skdkab, namakab: snamakab},
		success: function(data) {
			alert(data);
			table_kab();
		}
	})
};