<table id="TheTable" border="1" class="ExcelTable2007" width="100%">
		<tr>
			<th class="heading" width="20px"></th>
			<th>Kode Propinsi</th>
			<th>Kode Kabupaten</th>
			<th>Kode instansi</th>
			<th>Nama Instansi</th>
			<th></th>
		</tr>
		
		<?php $no = '1'; foreach ($instansi->result() as $ins):?>
		<tr>
			<td class="heading"><?php echo $no++;?></td>
			<td valign="bottom"><?php echo $ins->kd_prov; ?></td>
			<td valign="bottom"><?php echo $ins->kd_kab; ?></td>
			<td valign="bottom"><?php echo $ins->kd_instansi; ?></td>
			<td valign="bottom"><?php echo $ins->nama_instansi; ?></td>
			<td valign="bottom"></td>
		</tr>
		<?php endforeach;?>
	</table>