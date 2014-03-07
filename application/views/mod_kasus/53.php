<!-- Jumlah Penduduk Menurut Rata-Rata Lama Sekolah -->
<style>
.tg .colisi input {
width:100%;
}
</style>

<script type="text/javascript">
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
        <th class="colhead" colspan="20" width="70">Kelompok Usia Menurut Jenis Kelamin<br></th>
        <th class="colhead" rowspan="3" width="200">Keterangan</th>
    </tr>
    <tr>
        <th class="colhead" colspan="2">15 - 19 Thn</th>
        <th class="colhead" colspan="2">20 - 24 Thn</th>
        <th class="colhead" colspan="2">25 - 29 Thn</th>
        <th class="colhead" colspan="2">30 - 34 thn</th>
        <th class="colhead" colspan="2">35 - 39 Thn</th>
        <th class="colhead" colspan="2">40 - 44 Thn</th>
        <th class="colhead" colspan="2">45 - 49 Thn</th>
        <th class="colhead" colspan="2">50 - 54 thn</th>
        <th class="colhead" colspan="2">55 - 59 thn</th>
        <th class="colhead" colspan="2">+- 60   thn</th>
        
    </tr>
    <tr>
        <th class="colhead" >L</th>
        <th class="colhead" >P</th>
        
        <th class="colhead" >L</th>
        <th class="colhead" >P</th>
        
        <th class="colhead" >L</th>
        <th class="colhead" >P</th>
        
        <th class="colhead" >L</th>
        <th class="colhead" >P</th>
        
        <th class="colhead" >L</th>
        <th class="colhead" >P</th>
        
        <th class="colhead" >L</th>
        <th class="colhead" >P</th>
        
        <th class="colhead" >L</th>
        <th class="colhead" >P</th>
        
        <th class="colhead" >L</th>
        <th class="colhead" >P</th>
        
        <th class="colhead" >L</th>
        <th class="colhead" >P</th>
        
        <th class="colhead" >L</th>
        <th class="colhead" >P</th>        
    </tr>
    <tr>
        <td class="colisi">
            <select>
                <option>--Pilih Kab ....</option>
				<?php
                $kabupaten= $this->db->query('select * from master.m_kabupaten');
                foreach ($kabupaten->result() as $kab) {
                    ?><option value="&lt;?php echo $kab-&gt;kd_kab; ?&gt;"><?php echo $kab->nama_kab; ?></option><?php } ?>
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
            <input type="text" id="hiv" style="width: 200px;">
        </td>
    </tr>
</table>
<button id="AddColl" type="button">Tambah</button>

<button id="hpsColl" type="button">Hapus</button>