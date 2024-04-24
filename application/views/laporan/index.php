
<!-- Siswa -->
<div class="row mb-5">
	<div class="col-md-12">
		<div class="card shadow">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h4>Laporan Data Siswa</h4>
				<a onclick="return confirm('Unduh file PDF?')" href="<?= base_url('laporan/siswa') ?>" class="btn btn-sm btn-warning"><i class="fas fa-print"></i>
					Export PDF
				</a>
			</div>
			<div class="card-body">
				<table  class="table table-responsive table-stripped table-base table-sm table-bordered">
					<thead class="table-dark rounded">
						<tr>
							<th>#</th>
							<th>NISN</th>
							<th>NIS</th>
							<th>Nama</th>
							<th>Kelas</th>
							<th>Komp.Keahlian</th>
							<th>Alamat</th>
							<th>No.Telp</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; foreach($siswa as $s): ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $s->nisn ?></td>
								<td><?= $s->nis ?></td>
								<td><?= $s->nama ?></td>
								<td><?= $s->nama_kelas ?></td>
								<td><?= $s->nama_keahlian ?></td>
								<td><?= $s->alamat ?></td>
								<td><?= $s->no_telp ?></td>
							</tr>
						<?php endforeach ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Kelas -->
<div class="row mb-5">
	<div class="col-md-8">
		<div class="card shadow">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h4>Laporan Data Kelas</h4>
				<a onclick="return confirm('Unduh file PDF?')" href="<?= base_url('laporan/kelas') ?>" class="btn btn-sm btn-warning"><i class="fas fa-print"></i>
								Export PDF
				</a>
			</div>
			<div class="card-body">
				<table  class="table table-stripped table-base table-sm table-bordered">
					<thead class="table-dark rounded">
						<tr>
							<th>#</th>
							<th>Kelas</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; foreach($kelas as $s): ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $s->nama_kelas ?></td>
							</tr>
						<?php endforeach ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Jurusan / Komp.Keahlian -->
<div class="row mb-5">
	<div class="col-md-8">
		<div class="card shadow">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h4>Laporan Data Komp.Keahlian (Jurusan)</h4>
				<a onclick="return confirm('Unduh file PDF?')" href="<?= base_url('laporan/jurusan') ?>" class="btn btn-sm btn-warning"><i class="fas fa-print"></i>
								Export PDF
				</a>
			</div>
			<div class="card-body">
				<table  class="table table-responsive table-stripped table-base table-sm table-bordered">
					<thead class="table-dark rounded">
						<tr>
							<th>#</th>
							<th>Nama Komp.Keahlian</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; foreach($jurusan as $s): ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $s->nama_keahlian ?></td>
								<td><?= $s->keterangan_keahlian ?></td>
							</tr>
						<?php endforeach ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Pembayaran -->
<div class="row mb-5">
	<div class="col-md-12">
		<div class="card shadow">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h4>Laporan Transaksi Pembayaran</h4>
				<a onclick="return confirm('Unduh file PDF?')" href="<?= base_url('laporan/pembayaran') ?>" class="btn btn-sm btn-warning"><i class="fas fa-print"></i>
								Export PDF
				</a>
			</div>
			<div class="card-body">
				<table  class="table table-responsive table-stripped table-base table-sm table-bordered">
					<thead class="table-dark rounded">
						<tr>
							<th>#</th>
							<th>ID Pembayaran</th>
							<th>Nama Petugas</th>
							<th>NISN Siswa</th>
							<th>Nama Siswa</th>
							<th>Tgl.Bayar</th>
							<th>Bulan yang Dibayar</th>
							<th>Tahun Bayar</th>
							<th>Jumlah Bayar</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; foreach($pembayaran as $s): ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $s->id_pembayaran ?></td>
								<td><?= $s->nama_petugas ?></td>
								<td><?= $s->nisn ?></td>
								<td><?= $s->nama ?></td>
								<td><?= $s->tgl_bayar ?></td>
								<td><?= $s->bulan_dibayar ?></td>
								<td><?= $s->tahun_dibayar ?></td>
								<td><?= $s->jumlah_bayar ?></td>
							</tr>
						<?php endforeach ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Petugas -->
<div class="row mb-5">
	<div class="col-md-12">
		<div class="card shadow">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h4>Laporan Data Petugas</h4>
				<a onclick="return confirm('Unduh file PDF?')" href="<?= base_url('laporan/petugas') ?>" class="btn btn-sm btn-warning"><i class="fas fa-print"></i>
								Export PDF
				</a>
			</div>
			<div class="card-body">
				<table  class="table table-responsive table-stripped table-base table-sm table-bordered">
					<thead class="table-dark rounded">
						<tr>
							<th>#</th>
							<th>Nama Petugas</th>
							<th>Username</th>
							<th>Password</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; foreach($petugas as $s): ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $s->nama_petugas ?></td>
								<td><?= $s->username ?></td>
								<td><?= $s->password ?></td>
							</tr>
						<?php endforeach ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>