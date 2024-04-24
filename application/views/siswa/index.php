

<div class="row">
	<div class="col-md-10">
		<div class="card">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h4>Data Siswa</h4>
				<!-- <a 
					href="#"
					data-toggle="modal"
					data-target="#tambah_siswa"
					class="btn btn-success"
				>
					<i class="fas fa-fw fa-plus-circle"></i>
					 Tambah Siswa
				</a> -->
				<a href="<?= base_url('siswa/tambah') ?>" class="btn btn-success">
					<i class="fas fa-fw fa-plus-circle"></i>
					Tambah Siswa
				</a>
			</div>
			<div class="card-body">
				<table id="tb_siswa" class="table table-responsive table-stripped table-sm table-bordered">
					<thead class="table-dark rounded">
						<tr>
							<th>#</th>
							<th>NISN Siswa</th>
							<th>Nama</th>
							<th>Kelas</th>
							<th>Jurusan</th>
							<th>Alamat</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; foreach($siswa as $s): ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $s->nisn ?></td>
								<td><?= $s->nama ?></td>
								<td><?= $s->nama_kelas ?></td>
								<td><?= $s->nama_keahlian ?></td>
								<td><?= $s->alamat ?></td>
								<td>
									<button class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></button>
									<a href="<?= base_url('siswa/edit/'.$s->nisn) ?>" class="btn btn-primary btn-sm">
										<i class="fas fa-edit"></i>
									</a>
									<a onClick="return confirm('Data akan terhapus permanen. Yakin Hapus?')" href="<?= base_url('siswa/hapus/'.$s->nisn) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
								</td>
							</tr>
						<?php endforeach ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<!-- Modal Add siswa -->
<div
	class="modal fade"
	id="tambah_siswa"
	tabindex="-1"
	role="dialog"
	aria-labelledby="exampleModalLabel"
	aria-hidden="true"
>
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
			<button
				class="close"
				type="button"
				data-dismiss="modal"
				aria-label="Close"
			>
				<span aria-hidden="true">×</span>
			</button>
			</div>
			<div class="modal-body">
				<!-- Form -->
				<!-- <form action="<?= base_url('siswa/tambah') ?>"></form> -->
				<!-- End Form -->
			</div>
			<div class="modal-footer">
			<button
				class="btn btn-secondary"
				type="button"
				data-dismiss="modal"
			>
				Cancel
			</button>
			<a class="btn btn-primary" href="login.html">Logout</a>
			</div>
		</div>
	</div>
</div>