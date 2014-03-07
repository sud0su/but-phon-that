<!-- Cakupan Pertolongan Persalinan -->
<script>
$(document).ready(function(){

    $("#AddCol").hide();
	$("#hpsCol").hide();


});
	$('button#AddColl').on('click',function(){
            $('.tg > tbody:last').append('<tr>'+
            '<td class="colisi">'+
                '<select>'+
                    '<option>--Pilih Kab ....</option>'+
                    '<?php
                $kabupaten= $this->db->query('select * from master.m_kabupaten');
                foreach ($kabupaten->result() as $kab) {
                    ?><option value="<?php echo $kab->kd_kab; ?>"><?php echo $kab->nama_kab; ?></option><?php } ?>'+
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
            	'<input type="text" id="hiv">'+
        	'</td>'+
            '<td class="colisi">'+
                '<input type="text" id="hiv" style="width:200px;">'+
            '</td>'+
        '</tr>');
	});

        $('button#hpsColl').on('click',function(){
            $('.tg tr:last').remove();
	});
</script>

<table class="tg">
    <tr>
        <th class="colhead" rowspan="3" width="100">Wilayah<br></th>
        <th class="colhead" colspan="7" width="70">Cakupan Pertolongan Persalinan<br></th>
        <th class="colhead" rowspan="3" width="200">Keterangan</th>
    </tr>
    <tr>
        <th class="colhead" colspan="4" width="70">Penolongan Persalinan<br></th>
        <th class="colhead" colspan="3" width="70">Tempat Persalinan<br></th>
    </tr>
    <tr>
        <th class="colhead">Dukun</th>
        <th class="colhead">Perawat/Bidan</th>
        <th class="colhead">Dokter Umum/Kandungan</th>
        <th class="colhead">Lainyan</th>
        
        <th class="colhead">Dukun</th>
        <th class="colhead">Perawat/Bidan</th>
        <th class="colhead">Dokter Umum/Kandungan</th>
    </tr>
    <tr>
        <td class="colisi">
            <select>
                <option>--Pilih Kab ....</option>
				<?php
                $kabupaten= $this->db->query('select * from master.m_kabupaten');
                foreach ($kabupaten->result() as $kab) {
                    ?><option value="<?php echo $kab->kd_kab; ?>"><?php echo $kab->nama_kab; ?></option><?php } ?>
            </select>
        </td>
        <td class="colisi">
            <input type="text" id="hiv">
        </td>
        <td class="colisi">
            <input type="text" id="hiv">
        </td>
        <td class="colisi">
            <input type="text" id="hiv">
        </td>
        <td class="colisi">
            <input type="text" id="hiv">
        </td>
        <td class="colisi">
            <input type="text" id="hiv">
        </td>
        <td class="colisi">
            <input type="text" id="hiv">
        </td>
        <td class="colisi">
            <input type="text" id="hiv">
        </td>
        <td class="colisi">
            <input type="text" id="hiv" style="width:200px;">
        </td>
    </tr>
</table>
<button id="AddColl" type="button">Tambah</button>

<button id="hpsColl" type="button">Hapus</button>