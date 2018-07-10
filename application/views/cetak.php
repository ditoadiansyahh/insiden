<page_header> 
	<table>
		<tr>
			<td colspan="7" height="20">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="7"><h2 align="center">Berita Acara</h2></td>
		</tr>
	</table>
</page_header>
<table cellpadding="3">
	<tr>
		<td colspan="7"><h3 align="center"><?=$judul?></h3></td>
	</tr>
	<tr>
		<td colspan="7" height="20">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="7" height="20">
			Pada hari ini, <?php $mydate=getdate(date("U")); echo "$mydate[weekday]";?> tanggal <?php $mydate=getdate(date("U")); echo "$mydate[mday]";?> bulan <?php $mydate=getdate(date("U")); echo "$mydate[month]";?> tahun <?php $mydate=getdate(date("U")); echo "$mydate[year]";?>, yang bertanda tangan dibawah ini:
		</td>
	</tr>
	<tr>
		<td colspan="7" height="10">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="1">I. </td>
		<td colspan="1" >Nama/NIK</td>
		<td colspan="5">: <?=$nama?>/<?=$nik?></td>
		
	</tr>
	<tr>
		<td colspan="1"></td>
		<td colspan="1">Jabatan</td>
		<td colspan="5">: <?=$jabatan?></td>
		
	</tr>
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="1">II. </td>
		<td colspan="1">Nama/NIK</td>
		<td colspan="5">: <?=$nama2?>/<?=$nik2?></td>
		
	</tr>
	<tr>
		<td colspan="1"></td>
		<td colspan="1">Jabatan</td>
		<td colspan="5">: <?=$jabatan2?></td>
		
	</tr>
	<tr>
		<td></td>
		<td colspan="5">
		</td>
		<td></td>
	</tr>
	<tr>
		<td colspan="7" height="10" style="text-align: justify; line-height: 1.5">
			<?=$statement?>
		</td>
	</tr>
	<tr>
		<td colspan="1"></td>
		<td colspan="5">
			<table align="center" border="1">
			<tr>
				<td style="width:50px; word-wrap:break-word; display:inline-block;">
					No
				</td>
				<td>
					Type/Laptop
				</td>
				<td style="width:120px; word-wrap:break-word; display:inline-block;">
					Serial Number
				</td>
				<td>
					Status Instalasi Aplikasi
				</td>
			</tr>
			<?php $no=1; foreach ($isi as $x)
				
			{ ?>
			<tr>
				
				<td style="width:50px; word-wrap:break-word; display:inline-block;">
					<?php echo $no++ ?>
				</td>
				<td >
					<?= $x['tipe'] ?>		
				</td>
				<td style="width:120px; word-wrap:break-word; display:inline-block;">
					<?= $x['serial_number'] ?>
				</td>
				<td>
					<?= $x['status'] ?>
				</td>
				
			</tr>
			<?php } ?> 
		</table>
		</td>
		<td colspan="1"></td>
	</tr>
	<tr>
		
		<td colspan="7" style="text-align: justify; line-height: 1.5">Demikian berita acara ini dibuat dengan sebaik baiknya. Terima kasih.</td>
		
	</tr>
	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>

	<tr>
		
		<td colspan="2" style="text-align: center"></td>
		<td></td>
		<td></td>
		<td></td>
		<td colspan="2" style="text-align: center;"><?=$lokasi?>, <?php $mydate=getdate(date("U")); echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";?></td>
		
	</tr>

	<tr>
		<td colspan="7">&nbsp;</td>
	</tr>

	<tr>
		
		<td colspan="2" style="text-align: center"><?=$jabatan?></td>
		<td></td>
		<td></td>
		<td></td>
		<td colspan="2" style="text-align: center;"><?=$jabatan2?></td>
		
	</tr>
	<tr>
		<td colspan="7" height="40">&nbsp;</td>
	</tr>

	<tr>
		
		<td colspan="2" style="text-align: center;"><?=$nama?></td>
		<td></td>
		<td></td>
		<td></td>
		<td colspan="2" style="text-align: center;"><?=$nama2?></td>
		
	</tr>
</table>