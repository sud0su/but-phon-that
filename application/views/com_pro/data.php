<table id="TheTable" border="1" class="ExcelTable2007" width="100%">
		<tr>
			<th class="heading" width="20px"></th>
			<th>Kode Propinsi</th>
			<th>Nama Propinsi</th>
			<th></th>
		</tr>
		
		<?php $no = '1'; foreach ($provinsi->result() as $prov):?>
		<tr>
			<td class="heading"><?php echo $no++;?></td>
			<td valign="bottom"><?php echo $prov->kd_prov; ?></td>
			<td valign="bottom"><?php echo $prov->nama_prov; ?></td>
			<td valign="bottom">
			<span class="ui-button-icon-primary ui-icon ui-icon-edit"></span>
			</td>
		</tr>
		<?php endforeach;?>
	</table>