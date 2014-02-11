<table id="TheTable" border="1" class="ExcelTable2007" width="100%">
		<tr>
			<th class="heading" width="20px"></th>
			<th>Kode Propinsi</th>
			<th>Kode Kabupaten</th>
			<th>Nama Kabupaten</th>
			<th></th>
		</tr>
		
		<?php $no = '1'; foreach ($kabupaten->result() as $kab):?>
		<tr>
			<td class="heading"><?php echo $no++;?></td>
			<td valign="bottom"><?php echo $kab->kd_prov; ?></td>
			<td valign="bottom"><?php echo $kab->kd_kab; ?></td>
			<td valign="bottom"><?php echo $kab->nama_kab; ?></td>
			<td valign="bottom"></td>
		</tr>
		<?php endforeach;?>
	</table>