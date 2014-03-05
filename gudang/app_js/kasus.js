$(document).on('ready',function(){
	table_kasus();
	
	$('button.tambah').on('click',function(){
		tambah();
	});

	$('button#AddCol').on('click',function(){
            $('.tg > tbody:last').append('<tr>'+
            '<td class="colisi">'+
                '<select>'+
                    '<option>Penderita HIV</option>'+
                    '<option>Penderita HIV</option>'+
                    '<option>Penderita HIV</option>'+
                    '<option>Penderita HIV</option>'+
                '</select>'+
            '</td>'+
            '<td class="colisi">'+
                '<input type="text" id="hiv">'+
            '</td>'+
            '<td class="colisi">'+
                '<input type="text" id="hiv">'+
            '</td>'+
            '<td class="colisi">'+
                '<input type="text" id="hiv">'+
            '</td>'+
            '<td class="colisi">'+
                '<input type="text" id="hiv">'+
            '</td>'+
            '<td class="colisi">'+
                '<input type="text" id="hiv">'+
            '</td>'+
            '<td class="colisi">'+
                '<input type="text" id="hiv">'+
            '</td>'+
            '<td class="colisi">'+
                '<input type="text" id="hiv" style="width:200px;">'+
            '</td>'+
        '</tr>');
	});

        $('button#hpsCol').on('click',function(){
            $('.tg tr:last').remove();
	});

        $('#bidang').on('change',function(){
            var bidang = $(this).val();
            kasus(bidang);
        });
	
    $('.date-picker-year').datepicker({
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'yy',
        onClose: function(dateText, inst) {
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, 1));
        }
    });
    $(".date-picker-year").focus(function() {
        $(".ui-datepicker-month").hide();
    });
});

$(window).bind("load", function() {
    $('#loading').fadeOut(2000);
});

function kasus(bidang){
        var bidang = bidang;
	$.ajax({
        type: "POST",
        url : BASE_URL+"c_kasus/kasus",
        data : {bidang:bidang},
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        success: function(data){
            $('.optKasus').html(data);
        }
	});
}

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
        var bid= $('#bidang').val();
        var kas= $('#kasus').val();
        var sme= $('#smester').val();
        var thn= $('#txtYear').val();
        $.ajax({
            type: "POST",
            url : BASE_URL+"c_kasus/cekBidang",
            data : {bidang:bid},
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            success: function(data){
                $('.ketBid').html(data);
            }
	});
        $.ajax({
            type: "POST",
            url : BASE_URL+"c_kasus/cekKasus",
            data : {kasus:kas},
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            success: function(data){
                $('.ketKas').html(data);
            }
	});
        
        if (sme === '1'){
            $('.ketSme').text('Ganjil');
        } else {
            $('.ketSme').text('Genap');
        }
        
        $('.ketThn').text(thn);
        
        $.ajax({
            type: "POST",
            url : BASE_URL+"c_kasus/kasusForm",
            data : {kasus:kas},
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            success: function(data){
                $('#form').html(data);
            }
	});
        
	$('#tambahKasus').dialog({
		title : 'Form Tambah Data Kasus',
		width : 'auto',
		height : 'auto',
		cache : false,
		show : 'fade',
                hide : 'fade',
                resizable: false,
                draggable : false,
                position:[20,20],
		modal : true,
		buttons: {
			'Simpan': function() {
				//lokasi fungsi simpan
			},
			'Close': function() { $(this).dialog('close'); }
		}
	});
};