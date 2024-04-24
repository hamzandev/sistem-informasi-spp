<!-- <?php var_dump($jurusan) ?> -->
<form action="<?= base_url('kelas/tambah') ?>" method="POST">
	<div class="row">
		<div class="col-md-7">
			<div class="card">
				<div class="card-header d-flex justify-content-between align-items-center">
					<h4>Tambah Data Siswa</h4>
					
					<a href="<?= base_url('kelas') ?>" class="btn btn-secondary">
						<i class="fas fa-fw fa-arrow-left"></i>
						Batal
					</a>
				</div>
				<div class="card-body">
						<div class="form-group mb-3">
							<label for="nama_kelas">Kelas</label>
							<input placeholder="Masukkan kelas" type="text" name="nama_kelas" class="form-control">
							<small class="text-danger"><?= form_error('nama_kelas') ?></small>
						</div>
						<div class="form-group mb-3">
							<label for="id_komp_keahlian">Kompetensi Keahlian</label>
							<select class="form-control" name="id_komp_keahlian" id="id_komp_keahlian">
								<option value="0">-- Pilih Komp.Keahlian --</option>
								<?php foreach($jurusan as $k) : ?>
									<option value="<?= $k->id_komp_keahlian ?>"><?= $k->nama_keahlian ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<button type="submit" class="btn btn-success"><i class="fas fa-fw fa-check"></i> Simpan</button>
						<button type="reset" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i> Reset</button>

						
					</div>
				</div>
		</div>
	</div>

</form>