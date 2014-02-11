<div class="data-content">
	
	<button type="button" class="tambah">Tambah Data</button>
	
	<div id="dataTable">
		<div id="loading"></div>
	</div>	
</div>

	<div id="tambahBidang" style="display:none;" class="dialog_window">
	    <label>Provinsi</label>
	    <select id="kdprov">
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
		    <?php 
		    $query = $this->db->query('select * from master.m_kabupaten');
		    foreach ($query->result() as $dt){
		    ?>
		    	<option value="<?php echo $dt->kd_kab ?>"><?php echo $dt->nama_kab ?></option>
		    <?php } ?>
	    </select>
	    <br>
	    
	    <label>Provinsi</label>
	    <select id="kdins">
		    <?php 
		    $query = $this->db->query('select * from master.m_instansi');
		    foreach ($query->result() as $dt){
		    ?>
		    	<option value="<?php echo $dt->kd_instansi ?>"><?php echo $dt->nama_instansi ?></option>
		    <?php } ?>
	    </select>
	    <br>
	    
	    <label>Kode Bidang</label>
	    <input type="text" id="kdbid"><br>
	    
	    <label>Nama Bidang</label>
	    <input type="text" id="namabid"><br>
	</div>
<script src="gudang/app_js/bidang.js"></script>