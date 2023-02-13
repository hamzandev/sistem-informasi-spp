<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Pembayaran</title>
	<style>
		body {
			font-family: 'Arial', sans-serif;
		}

		table {
			width: 100%;
		}

		thead {
			background: orange;
			color: white;
		}
	</style>
</head>
<body>
	<h1 style="text-align: center;">LAPORAN PEMBAYARAN</h1>
	
	<?php if( is_array($pembayaran) ): ?>
	<table border='2' cellpadding="5" cellspacing="0">
		<thead>
			<tr>
				<th>ID Pembayaran</th>
				<th>Nama Petugas</th>
				<th>NISN Siswa</th>
				<th>Nama Siswa</th>
				<th>Tgl.Bayar</th>
				<th>Bulan yang dibayar</th>
				<th>Jumlah Bayar</th>
			</tr>
		</thead>
		<tbody>
				<?php foreach($pembayaran as $p): ?>
					<tr>
						<td><?= $p->id_pembayaran ?></td>
						<td><?= $p->nama_petugas ?></td>
						<td><?= $p->nisn ?></td>
						<td><?= $p->nama ?></td>
						<td><?= $p->tgl_bayar ?></td>
						<td><?= $p->bulan_dibayar ?></td>
						<td><?= $p->jumlah_bayar ?></td>
					</tr>
				<?php endforeach ?>
		</tbody>
	</table>
	<?php else : ?>
		<table cellpadding="5">
			<tr>
				<td>ID Pembayaran</td>
				<td>:</td>
				<td><?= $pembayaran->id_pembayaran ?></td>
			</tr>
			<tr>
				<td>Nama Petugas</td>
				<td>:</td>
				<td><?= $pembayaran->nama_petugas ?></td>
			</tr>
			<tr>
				<td>NISN Siswa</td>
				<td>:</td>
				<td><?= $pembayaran->nisn ?></td>
			</tr>
			<tr>
				<td>Tgl.Bayar</td>
				<td>:</td>
				<td><?= $pembayaran->tgl_bayar ?></td>
			</tr>
			<tr>
				<td>Bulan yang dibayar</td>
				<td>:</td>
				<td><?= $pembayaran->bulan_dibayar ?></td>
			</tr>
			<tr>
				<td>Jumlah Bayar</td>
				<td>:</td>
				<td>Rp.<?= number_format($pembayaran->jumlah_bayar, 0, ".", ".") ?></td>
			</tr>
		</table>	
	<?php endif ?>
		
</body>
</html>