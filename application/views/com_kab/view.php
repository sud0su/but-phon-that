<div class="data-content">
	
	<button type="button" class="tambah">Tambah Data</button>
	
	<div id="dataTable">
		<div id="loading"></div>
	</div>	
</div>

	<div id="tambahKabupaten" style="display:none;" class="dialog_window">
	    <label>Provinsi</label>
	    <select id="kdprov">
	    	<option value="">- Pilih -</option>
		    <?php 
		    $query = $this->db->query('select * from master.m_provinsi');
		    foreach ($query->result() as $dt){
		    ?>
		    	<option value="<?php echo $dt->kd_prov ?>"><?php echo $dt->nama_prov ?></option>
		    <?php } ?>
	    </select>
	    <br>
	    
	    <label>Kode Kabupaten</label>
	    <input type="text" id="kdkab"><br>
	    
	    <label>Nama Kabupaten</label>
	    <input type="text" id="namakab"><br>
	</div>
<script src="gudang/app_js/kab.js"></script>