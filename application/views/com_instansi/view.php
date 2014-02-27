<div class="data-content">
	
	<button type="button" class="tambah">Tambah Data</button>
	
	<div id="dataTable">
		<div id="loading"></div>
	</div>	
</div>

	<div id="tambahInstansi" style="display:none;" class="dialog_window">
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
	    
	    <label>Provinsi</label>
	    <select id="kdkab">
	    	<option value="">- Pilih -</option>
		    <?php 
		    $query = $this->db->query('select * from master.m_kabupaten');
		    foreach ($query->result() as $dt){
		    ?>
		    	<option value="<?php echo $dt->kd_kab ?>"><?php echo $dt->nama_kab ?></option>
		    <?php } ?>
	    </select>
	    <br>
	    
	    <label>Kode Instansi</label>
	    <input type="text" id="kdins"><br>
	    
	    <label>Nama Instansi</label>
	    <input type="text" id="namains"><br>
	</div>
<script src="gudang/app_js/instansi.js"></script>