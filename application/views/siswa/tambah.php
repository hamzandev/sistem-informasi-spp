
<form action="<?= base_url('siswa/tambah') ?>" method="POST" >
	<div class="row">
		<div class="col-md-7">
			<div class="card">
				<div class="card-header d-flex justify-content-between align-items-center">
					<h4>Tambah Data Siswa</h4>
					
					<a href="<?= base_url('siswa') ?>" class="btn btn-secondary">
						<i class="fas fa-fw fa-arrow-left"></i>
						Batal
					</a>
				</div>
				<div class="card-body">
						<div class="form-group mb-3">
							<label for="nisn">NISN Siswa</label>
							<input placeholder="ex : 12090129930" type="number" name="nisn" class="form-control">
						</div>
						<div class="form-group mb-3">
							<label for="nis">NIS Siswa</label>
							<input placeholder="ex : 21928387839" type="number" name="nis" class="form-control">
						</div>
						<div class="form-group mb-3">
							<label for="nama">Nama Lengkap</label>
							<input placeholder="ex : John Doe" type="text" name="nama" class="form-control">
						</div>
						
						<div class="form-group mb-3">
							<label for="no_telp">No Telp</label>
							<input placeholder="ex : 081234567890" type="text" name="no_telp" class="form-control">
						</div>
						<div class="form-group mb-3">
							<label for="password">Password Akun</label>
							<input placeholder="Masukkan Password akun siswa" type="password" name="password" class="form-control">
						</div>
						
					</div>
				</div>
		</div>

		<div class="col-md-5">
			<div class="card">
				<div class="card-body">
					<div class="form-group mb-3">
						<label for="id_kelas">Kelas</label>
						<select class="form-control" name="id_kelas" id="id_kelas">
							<option value="0">-- Pilih Kelas --</option>
							<?php foreach($kelas as $k) : ?>
								<option value="<?= $k->id_kelas ?>"><?= $k->nama_kelas ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group mb-3">
						<label for="id_komp_keahlian">Jurusan (Komp.Keahlian)</label>
						<select class="form-control" name="id_komp_keahlian" id="id_komp_keahlian">
							<option value="0">-- Pilih Jurusan --</option>
							<?php foreach($komp_keahlian as $k) : ?>
								<option value="<?= $k->id_komp_keahlian ?>"><?= $k->nama_keahlian ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group mb-3">
						<label for="id_spp">SPP Tahun</label>
						<select class="form-control" name="id_spp" id="id_spp">
							<option value="0">-- Pilih SPP --</option>
							<?php foreach($spp as $k) : ?>
								<option value="<?= $k->id_spp ?>"><?= $k->tahun ?> - <?= $k->nominal ?></option>
							<?php endforeach ?>
						</select>
					</div>
					
					<div class="form-group mb-3">
						<label for="password">Alamat</label>
						<textarea name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Siswa" cols="30" rows="5"></textarea>
					</div>

					<button type="submit" class="btn btn-success"><i class="fas fa-fw fa-check"></i> Simpan</button>
					<button type="reset" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i> Reset</button>

				</div>
			</div>
		</div>
	</div>

</form>