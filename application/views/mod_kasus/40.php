<!-- Angka Kematian Ibu Melahirkan-->
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
        <th class="colhead" rowspan="2" width="100">Wilayah<br></th>
        <th class="colhead" colspan="6 width="70">Penyebab Kematian Ibu Melahirkan<br></th>
        <th class="colhead" rowspan="2" width="200">Keterangan</th>
    </tr>
    <tr>
        <th class="colhead">Infeksi dan Pendarahan</th>
        <th class="colhead">Keracunan Kehamilan</th>
        <th class="colhead">Aborsi</th>
        <th class="colhead">Hipertensi/Preeklamasi</th>
        <th class="colhead">Anemia</th>
        <th class="colhead">Lainnya</th>
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
            <input type="text" id="hiv" style="width:200px;">
        </td>
    </tr>
</table>

<button id="AddColl" type="button">Tambah</button>

<button id="hpsColl" type="button">Hapus</button>