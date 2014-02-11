<table id="TheTable" border="1" class="ExcelTable2007" width="100%">
		<tr>
			<th class="heading" width="20px"></th>
			<th>Kode Propinsi</th>
			<th>Kode Kabupaten</th>
			<th>Kode instansi</th>
			<th>Kode Bidang</th>
			<th>Nama Bidang</th>
			<th></th>
		</tr>
		
		<?php $no = '1'; foreach ($bidang->result() as $bid):?>
		<tr>
			<td class="heading"><?php echo $no++;?></td>
			<td valign="bottom"><?php echo $bid->kd_prov; ?></td>
			<td valign="bottom"><?php echo $bid->kd_kab; ?></td>
			<td valign="bottom"><?php echo $bid->kd_instansi; ?></td>
			<td valign="bottom"><?php echo $bid->kd_bidang; ?></td>
			<td valign="bottom"><?php echo $bid->nama_bidang; ?></td>
			<td valign="bottom"></td>
		</tr>
		<?php endforeach;?>
	</table>