<!-- Petugas -->
<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h4>Data Petugas</h4>
				
			</div>
			<div class="card-body">
				<table id="tb_siswa" class="table table-responsive table-stripped table-sm table-bordered">
					<thead class="table-dark rounded">
						<tr>
							<th>#</th>
							<th>Nama Petugas</th>
							<th>Username</th>
							<th>Level</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; foreach($petugas as $s): ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $s->nama_petugas ?> </td>
								<td><?= $s->username ?> </td>
								<td><?= $s->level ?> </td>
								<td>
									<a href="<?= base_url('petugas/edit/'.$s->id_petugas) ?>" class="btn btn-primary btn-sm">
										<i class="fas fa-edit"></i>
									</a>
									<a onClick="return confirm('Data akan terhapus permanen. Yakin Hapus?')" href="<?= base_url('petugas/hapus/'.$s->id_petugas) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
								</td>
							</tr>
						<?php endforeach ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h4>Tambah Petugas</h4>
				
			</div>
			<div class="card-body">
				<form action="<?= base_url('petugas') ?>" method="post">
					<div class="form-group mb-3">
						<label for="nama_petugas">Nama Petugas</label>
						<input placeholder="Nama Petugas" type="text" name="nama_petugas" class="form-control">
						<small class="text-danger"><?= form_error('nama_petugas') ?></small>
					</div>
					<div class="form-group mb-3">
						<label for="username">Username</label>
						<input placeholder="Buat Username petugas..." type="text" name="username" class="form-control">
						<small class="text-danger"><?= form_error('username') ?></small>
					</div>
					<div class="form-group mb-3">
						<label for="password">Password Petugas</label>
						<span class="d-flex align-items-center" style="position: relative;">
							<input placeholder="Panjang password mininal 6 karakter" type="password" id="password" name="password" class="form-control">
							<label id="showPwd" class="d-flex align-items-center mt-2 mr-2" style="position: absolute; right: 0;"><i class="fas fa-eye"></i></label>
						</span>
						<small class="text-danger"><?= form_error('password') ?></small>
					</div>
					<div class="form-group mb-3">
						<label for="level">Level</label>
						<select class="form-control" name="level" id="level">
							<option value="admin">Admin</option>
							<option value="petugas">Petugas</option>
						</select>
						<small class="text-danger"><?= form_error('level') ?></small>
					</div>
					<button type="submit" class="btn btn-sm btn-success"><i class="fas fa-fw fa-check"></i> Simpan</button>
					<button type="reset" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i> Reset</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal Detail Petugas -->

<!-- Modal tambah Jurusan -->
<form action="<?= base_url('kompetensi_keahlian/tambah') ?>" method="post">
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Detail Petugas</h5>
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
				
				<div class="form-group mb-3">
					<label for="nama_petugas">Nama Petugas</label>
					<input value="<?= $petugas->nama_petugas ?>" placeholder="Nama Petugas" type="text" name="nama_petugas" class="form-control">
					<small class="text-danger"><?= form_error('nama_petugas') ?></small>
				</div>
				<div class="form-group mb-3">
					<label for="username">Username</label>
					<input value="<?= $petugas->username ?>" placeholder="Buat Username petugas..." type="text" name="username" class="form-control">
					<small class="text-danger"><?= form_error('username') ?></small>
				</div>
				<div class="form-group mb-3">
					<label for="password">Password Petugas</label>
					<span class="d-flex align-items-center" style="position: relative;">
						<input value="<?= $petugas->password ?>" placeholder="Panjang password mininal 6 karakter" type="password" id="password" name="password" class="form-control">
						<label id="showPwd" class="d-flex align-items-center mt-2 mr-2" style="position: absolute; right: 0;"><i class="fas fa-eye"></i></label>
					</span>
					<small class="text-danger"><?= form_error('password') ?></small>
				</div>
				<div class="form-group mb-3">
					<label for="level">Level</label>
					<select class="form-control" name="level" id="level">
						<option <?= $petugas->level == 'admin' ? 'selected' : '' ?> value="admin">Admin</option>
						<option <?= $petugas->level == 'petugas' ? 'selected' : '' ?> value="petugas">Petugas</option>
					</select>
					<small class="text-danger"><?= form_error('level') ?></small>
				</div>
				<button type="submit" class="btn btn-sm btn-success"><i class="fas fa-fw fa-check"></i> Simpan</button>
				<button type="reset" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i> Reset</button>


			</div>
		</div>
	</div>
</form>

