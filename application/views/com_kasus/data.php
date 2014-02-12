<table id="TheTable" border="1" class="ExcelTable2007" width="100%">
		<tr>
			<th class="heading" width="20px"></th>
			<th>Kode Propinsi</th>
			<th>Kode Kabupaten</th>
			<th>Kode Instansi</th>
			<th>Kode Bidang</th>
			<th>Semester</th>
			<th>Tahun</th>
			<th>Kode Kasus</th>
			<th>Nama Kasus</th>
			<th></th>
		</tr>
		
		<?php $no = '1'; foreach ($kasus->result() as $kas):?>
		
		<tr>
			<td class="heading"><?php echo $no++;?></td>
			<td valign="bottom"><?php echo $kas->kd_prov; ?></td>
			<td valign="bottom"><?php echo $kas->kd_kab; ?></td>
			<td valign="bottom"><?php echo $kas->kd_instansi; ?></td>
			<td valign="bottom"><?php echo $kas->kd_bidang; ?></td>
			
			<td valign="bottom"><?php echo $kas->kd_semester; ?></td>
			
			<td valign="bottom"><?php echo $kas->tahun; ?></td>
			<td valign="bottom"><?php echo $kas->kd_kasus; ?></td>
			<td valign="bottom"><?php echo $kas->nama_kasus; ?></td>
			<td valign="bottom"></td>
		</tr>
		
		<?php endforeach;?>
	</table>