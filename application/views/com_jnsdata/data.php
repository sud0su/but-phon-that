<table id="TheTable" border="1" class="ExcelTable2007" width="100%">
		<tr>
			<th class="heading" width="20px"></th>
			<th>Kode Jenis Data</th>
			<th>Nama Jenis Data</th>
			<th></th>
		</tr>
		
		<?php $no = '1'; foreach ($jenisdata->result() as $jns):?>
		<tr>
			<td class="heading"><?php echo $no++;?></td>
			<td valign="bottom"><?php echo $jns->kd_jns; ?></td>
			<td valign="bottom"><?php echo $jns->nama_data; ?></td>
			<td valign="bottom"></td>
		</tr>
		<?php endforeach;?>
	</table>