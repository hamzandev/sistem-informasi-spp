<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Data Petugas</title>
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
	<h1 style="text-align: center;">Laporan Data Petugas</h1>
	<table border='2' cellpadding="5" cellspacing="0">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Petugas</th>
				<th>Username</th>
				<th>Password</th>
			</tr>
		</thead>
		<tbody>
				<?php $i=1; foreach($petugas as $p): ?>
					<tr>
						<td><?= $p->$i++ ?></td>
						<td><?= $p->nama_petugas ?></td>
						<td><?= $p->username ?></td>
						<td><?= $p->password ?></td>
					</tr>
				<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>