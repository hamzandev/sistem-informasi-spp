<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Data Siswa</title>
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
	<h1 style="text-align: center;">Laporan Data Siswa</h1>
	<table border='2' cellpadding="5" cellspacing="0">
		<thead>
			<tr>
				<th>NISN</th>
				<th>NIS</th>
				<th>Nama Siswa</th>
				<th>Kelas</th>
				<th>Komp.Keahlian</th>
				<th>alamat</th>
				<th>No.Telp</th>
			</tr>
		</thead>
		<tbody>
				<?php foreach($siswa as $p): ?>
					<tr>
						<td><?= $p->nisn ?></td>
						<td><?= $p->nis ?></td>
						<td><?= $p->nama ?></td>
						<td><?= $p->nama_kelas ?></td>
						<td><?= $p->nama_keahlian ?></td>
						<td><?= $p->alamat ?></td>
						<td><?= $p->no_telp ?></td>
					</tr>
				<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>