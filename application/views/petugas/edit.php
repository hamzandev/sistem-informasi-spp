<div class="row">
	<div class="col-md-5">
		<div class="card">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h4>Edit Petugas</h4>
				<a href="<?= base_url('petugas') ?>" class="btn btn-sm btn-secondary">
					<i class="fas fa-arrow-left"></i>
					Batal
				</a>
			</div>
			<div class="card-body">
				<form action="<?= base_url('petugas/edit/'.$petugas->id_petugas) ?>" method="post">
					<input type="hidden" name="id_petugas" value="<?= $petugas->id_petugas ?>" class="form-control">
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
						<label for="password">Password Lama</label>
						<span class="d-flex align-items-center" style="position: relative;">
							<input value="<?= $petugas->password ?>" placeholder="Panjang password mininal 6 karakter" type="password" id="password" name="password" class="form-control">
							<label id="showPwd" class="d-flex align-items-center mt-2 mr-2" style="position: absolute; right: 0;"><i class="fas fa-eye"></i></label>
						</span>
						<small class="text-danger"><?= form_error('password') ?></small>
					</div>
					<div class="form-group mb-3">
						<label for="password">Input Password baru</label>
						<span class="d-flex align-items-center" style="position: relative;">
							<input autofocus placeholder="Panjang password mininal 6 karakter" type="password" id="password_baru" name="password_baru" class="form-control">
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
				</form>
			</div>
		</div>
	</div>
</div>