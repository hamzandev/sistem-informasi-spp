
<div class="row">
	<div class="col-md-5">
		<div class="card">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h4>Edit Data Kelas</h4>
				<a href="<?= base_url('kelas') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i> Batal</a>
			</div>
			<div class="card-body">
				<form action="<?= base_url('kelas/edit/'.$kelas->id_kelas) ?>" method="post">
					<input value="<?= $kelas->id_kelas ?>" type="hidden" name="id_kelas" class="form-control">
					<div class="form-group mb-3">
						<label for="nama_kelas">Kelas</label>
						<input value="<?= $kelas->nama_kelas ?>" required placeholder="Nama Komp.Keahlian" type="text" name="nama_kelas" class="form-control">
						<small class="text-danger"><?= form_error('nama_keahlian') ?></small>
					</div>
					<div class="form-group mb-3">
						<label for="keterangan_keahlian">Keterangan</label>
						<select class="form-control" name="id_komp_keahlian" >
							<?php foreach($jurusan as $j): ?>
								<option <?= $j->id_komp_keahlian == $kelas->id_komp_keahlian ? 'selected' : '' ?> value="<?= $j->id_komp_keahlian ?>"><?= $j->nama_keahlian ?></option>
							<?php endforeach ?>
						</select>
						<small class="text-danger"><?= form_error('keterangan_keahlian') ?></small>
					</div>
					<button type="submit" class="btn btn-sm btn-success"><i class="fas fa-fw fa-check"></i> Simpan</button>
					<button type="reset" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i> Reset</button>
				</form>
			</div>
		</div>
	</div>
</div>