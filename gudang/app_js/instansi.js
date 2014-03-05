$(document).on('ready',function(){
	table_ins();
	
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
        url : BASE_URL+"c_base/table_ins",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
        	 	$('#dataTable').html(data);
        }
	});
}

function tambah(){
	$('#tambahInstansi').dialog({
		title : 'Form Tambah Data Instansi',
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
				var kdins = $('#kdins').val();
				var namains = $('#namains').val();
				if (kdprov === ''){
					alert('Kode kabupaten belum diisi');
				} else if(kdkab === ''){
					alert ('Kode Kabupaten belum diisi');
				} else if(kdins === ''){
					alert ('Kode Instansi belum diisi');
				} else if(namains === ''){
					alert ('Nama Instansi belum diisi');
				} else {
					simpanInstansi(kdprov, kdkab, kdins, namains);
					$(this).dialog('close');
				}
			},
			'Close': function() { $(this).dialog('close'); }
		},
		resizable: false
	});
};

function simpanInstansi(kdprov, kdkab, kdins, namains){
	var skdprov = kdprov;
	var skdkab = kdkab;
	var skdins = kdins;
	var snamains = namains;
	
	$.ajax({
		type: 'POST',
		url: BASE_URL+'c_instansi/simpan',
		data: { kdprov:skdprov, kdkab:skdkab, kdins:skdins, namains:snamains},
		success: function(data) {
			alert(data);
			table_ins();
		}
	})
};