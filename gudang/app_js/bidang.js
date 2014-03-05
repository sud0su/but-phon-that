$(document).on('ready',function(){
	table_bid();
	
	$('button.tambah').on('click',function(){
		tambah();
	});
	
});

$(window).bind("load", function() {
    $('#loading').fadeOut(2000);
});

function table_bid(){
	$.ajax({
        type: "POST",
        url : BASE_URL+"c_base/table_bid",
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
        	 	$('#dataTable').html(data);
        }
	});
}

function tambah(){
	$('#tambahBidang').dialog({
		title : 'Form Tambah Data Bidang',
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
				var namabid = $('#namabid').val();
				if (kdprov == ''){
					alert('Kode kabupaten belum diisi');
				} else if(kdkab === ''){
					alert ('Kode Kabupaten belum diisi');
				} else if(kdins === ''){
					alert ('Kode Instansi belum diisi');
				} else if(kdbid === ''){
					alert ('Kode BIdang belum diisi');
				} else if(namabid === ''){
					alert ('Nama Bidang belum diisi');
				} else {
					simpanBidang(kdprov, kdkab, kdins, kdbid, namabid);
					$(this).dialog('close');
				}
			},
			'Close': function() { $(this).dialog('close'); }
		},
		resizable: false
	});
};

function simpanBidang(kdprov, kdkab, kdins, kdbid, namabid){
	var skdprov= kdprov;
	var skdkab= kdkab;
	var skdins= kdins; 
	var skdbid= kdbid;
	var snamabid= namabid;
	
	$.ajax({
		type: 'POST',
		url: BASE_URL+'c_bidang/simpan',
		data: {kdprov:skdprov, kdkab:skdkab, kdins:skdins, kdbid:skdbid, namabid:snamabid},
		success: function(data) {
			alert(data);
			table_bid();
		}
	})
};