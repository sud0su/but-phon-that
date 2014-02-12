<div class="data-content">
	
	<button type="button" class="tambah">Tambah Data</button>
	
	<div id="dataTable">
		<div id="loading"></div>
	</div>	
</div>

	<div id="tambahKasus" style="display:none;" class="dialog_window">
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
	    
	    <label>Kabupaten</label>
	    <select id="kdkab">
		    <?php 
		    $query = $this->db->query('select * from master.m_kabupaten');
		    foreach ($query->result() as $dt){
		    ?>
		    	<option value="<?php echo $dt->kd_kab ?>"><?php echo $dt->nama_kab ?></option>
		    <?php } ?>
	    </select>
	    <br>
	    
	    <label>Instansi</label>
	    <select id="kdins">
		    <?php 
		    $query = $this->db->query('select * from master.m_instansi');
		    foreach ($query->result() as $dt){
		    ?>
		    	<option value="<?php echo $dt->kd_instansi ?>"><?php echo $dt->nama_instansi ?></option>
		    <?php } ?>
	    </select>
	    <br>
	    
	    <label>Bidang</label>
	    <select id="kdbid">
		    <?php 
		    $query = $this->db->query('select * from master.m_bidang');
		    foreach ($query->result() as $dt){
		    ?>
		    	<option value="<?php echo $dt->kd_bidang ?>"><?php echo $dt->nama_bidang ?></option>
		    <?php } ?>
	    </select>
	    <br>
	    
	    <label>Semester</label>
	    <select id="semes">
		    	<option value="1">Genap</option>
		    	<option value="2">Ganjil</option>
	    </select>
	    <br>
	    
	    <label>Tahun</label>
	    <input type="text" id="tahun"><br>
	    
	    <label>Kode Kasus</label>
	    <input type="text" id="kdkas"><br>
	    
	    <label>Nama Kasus</label>
	    <input type="text" id="namakas"><br>
	</div>
<script src="gudang/app_js/kasus.js"></script>