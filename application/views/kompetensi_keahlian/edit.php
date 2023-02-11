
<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h4>Edit Data Kompetensi Keahlian</h4>
				<a href="<?= base_url('kelas') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i> Batal</a>
			</div>
			<div class="card-body">
				<form action="<?= base_url('kompetensi_keahlian/edit/'.$jurusan->id_komp_keahlian) ?>" method="post">
					<input value="<?= $jurusan->id_komp_keahlian ?>" type="hidden" name="id_komp_keahlian" class="form-control">
					<div class="form-group mb-3">
						<label for="nama_keahlian">Nama Komp.Keahlian</label>
						<input value="<?= $jurusan->nama_keahlian ?>" required placeholder="Nama Komp.Keahlian" type="text" name="nama_keahlian" class="form-control">
						<small class="text-danger"><?= form_error('nama_keahlian') ?></small>
					</div>
					<div class="form-group mb-3">
						<label for="keterangan_keahlian">Keterangan</label>
						<textarea required placeholder="Masukkan keterangan Kompetensi Keahlian" class="form-control" name="keterangan_keahlian" id="keterangan_keahlian" cols="30" rows="5">
							<?= $jurusan->keterangan_keahlian ?>
						</textarea>
						<small class="text-danger"><?= form_error('keterangan_keahlian') ?></small>
					</div>
					<button type="submit" class="btn btn-sm btn-success"><i class="fas fa-fw fa-check"></i> Simpan</button>
					<button type="reset" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i> Reset</button>
				</form>
			</div>
		</div>
	</div>
</div>