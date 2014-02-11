$(document).on('ready',function(){
	table_pro();
	
	$('button.tambah').on('click',function(){
		tambah();
	});
	
});

$(window).bind("load", function() {
    $('#loading').fadeOut(2000);
});

function table_ins(){
	$.ajax({
        type: "POST",
        url : BASE_URL+"c_base/table_pro",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
        	 	$('#dataTable').html(data);
        }
	});
}

function tambah(){
	$('#tambahPropinsi').dialog({
		title : 'Form Tambah Data Propinsi',
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
				var prov = $('#nopro').val();
				var namaprov = $('#namapro').val();
				if (prov == ''){
					alert('Kode provinsi belum diisi');
				} else if(namaprov == ''){
					alert ('Nama Provinsi belum diisi');
				} else {
					simpanProvinsi(prov, namaprov);
				}
			},
			'Close': function() { $(this).dialog('close'); }
		},
		resizable: false
	});
};

function simpanProvinsi(prov, namaprov){
	var sprov = prov;
	var snamaprov = namaprov;
	//alert(snamaprov);
	
	$.ajax({
		type: 'POST',
		url: BASE_URL+'c_provinsi/simpan',
		data: { prov: sprov, namaprov: snamaprov},
		success: function(data) {
			alert(data);
		}
	})
};