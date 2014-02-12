$(document).on('ready',function(){
	table_kasus();
	
	$('button.tambah').on('click',function(){
		tambah();
	});
	
});

$(window).bind("load", function() {
    $('#loading').fadeOut(2000);
});

function table_kasus(){
	$.ajax({
        type: "POST",
        url : BASE_URL+"c_base/table_kasus",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
        	 	$('#dataTable').html(data);
        }
	});
}

function tambah(){
	$('#tambahKasus').dialog({
		title : 'Form Tambah Data Kasus',
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
				var kdbid = $('#kdbid').val();
				var semes = $('#semes').val();
				var tahun = $('#tahun').val();
				var kdkas = $('#kdkas').val();				
				var namakas = $('#namakas').val();
				
				if (kdprov == ''){
					alert('Kode kabupaten belum diisi');
				} else if(kdkab == ''){
					alert ('Kode Kabupaten belum diisi');
				} else if(kdins == ''){
					alert ('Kode Instansi belum diisi');
				} else if(kdbid == ''){
					alert ('Kode Bidang belum diisi');
				} else if(semes == ''){
					alert ('Semester belum diisi');
				} else if(tahun == ''){
					alert ('Tahun belum diisi');
				} else if(kdkas == ''){
					alert ('Kode Kasus belum diisi');
				} else if(namakas == ''){
					alert ('Nama Kasus belum diisi');
				} else {
					simpanKasus(kdprov, kdkab, kdins, kdbid, semes, tahun, kdkas, namakas);
					$(this).dialog('close');
				}
			},
			'Close': function() { $(this).dialog('close'); }
		},
		resizable: false
	});
};

function simpanKasus(kdprov, kdkab, kdins, kdbid, semes, tahun, kdkas, namakas){
	var skdprov= kdprov;
	var skdkab= kdkab;
	var skdins= kdins;
	var skdbid= kdbid;
	var ssemes= semes;
	var stahun= tahun;
	var skdkas= kdkas;
	var snamakas= namakas;
	
	$.ajax({
		type: 'POST',
		url: BASE_URL+'c_kasus/simpan',
		data: {kdprov:skdprov, kdkab:skdkab, kdins:skdins, kdbid:skdbid, semes:ssemes, tahun:stahun, kdkas:skdkas, namakas:snamakas},
		success: function(data) {
			alert(data);
			table_kasus();
		}
	})
};