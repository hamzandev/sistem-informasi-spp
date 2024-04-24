
<div class="row">
	<div class="col-md-7">
		<div class="card">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h4>Data Kelas</h4>
				
				<!-- <a href="<?= base_url('kelas/tambah') ?>" class="btn btn-success">
					<i class="fas fa-fw fa-plus-circle"></i>
					Tambah Kelas
				</a> -->
			</div>
			<div class="card-body">
				<table id="tb_siswa" class="table table-responsive table-stripped table-sm table-bordered">
					<thead class="table-dark rounded">
						<tr>
							<th>#</th>
							<th>Kelas - Komp.Keahlian</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; foreach($kelas as $s): ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $s->nama_kelas ?> - <?= $s->nama_keahlian ?></td>
								<td>
									<a href="<?= base_url('kelas/edit/'.$s->id_kelas) ?>" class="btn btn-primary btn-sm">
										<i class="fas fa-edit"></i>
									</a>
									<a onClick="return confirm('Data akan terhapus permanen. Yakin Hapus?')" href="<?= base_url('kelas/hapus/'.$s->id_kelas) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
								</td>
							</tr>
						<?php endforeach ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<div class="card">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h4>Tambah Data Kelas</h4>
				
			</div>
			<div class="card-body">
				<form action="<?= base_url('kelas') ?>" method="post">
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
						<small class="text-danger"><?= form_error('id_komp_keahlian') ?></small>
					</div>
					<button type="submit" class="btn btn-sm btn-success"><i class="fas fa-fw fa-check"></i> Simpan</button>
					<button type="reset" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i> Reset</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Jurusan -->
<div class="row mt-5">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h4>Data Kompetensi Keahlian</h4>
				
				<a  href="#"
                    data-toggle="modal"
                    data-target="#logoutModal" 
					href="<?= base_url('kelas/tambah') ?>" class="btn btn-sm btn-success">
					<i class="fas fa-fw fa-plus-circle"></i>
					Tambah Baru
				</a>
			</div>
			<div class="card-body">
				<table id="tb_komp_keahlian" class="table table-responsive table-stripped table-sm table-bordered">
					<thead class="table-dark rounded">
						<tr>
							<th>#</th>
							<th>Nama Komp.Keahlian</th>
							<th>Keterangan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; foreach($jurusan as $s): ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $s->nama_keahlian ?></td>
								<td><?= $s->keterangan_keahlian ?></td>
								<td>
									<a href="<?= base_url('kompetensi_keahlian/edit/'.$s->id_komp_keahlian) ?>" class="btn btn-primary btn-sm">
										<i class="fas fa-edit"></i>
									</a>
									<a onClick="return confirm('Data akan terhapus permanen. Yakin Hapus?')" href="<?= base_url('kompetensi_keahlian/hapus/'.$s->id_komp_keahlian) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
								</td>
							</tr>
						<?php endforeach ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


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
		<h5 class="modal-title" id="exampleModalLabel">Tambah Komp.Keahlian</h5>
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
					<label for="nama_keahlian">Nama Komp.Keahlian</label>
					<input required placeholder="Nama Komp.Keahlian" type="text" name="nama_keahlian" class="form-control">
					<small class="text-danger"><?= form_error('nama_keahlian') ?></small>
				</div>
				<div class="form-group mb-3">
					<label for="keterangan_keahlian">Keterangan</label>
					<textarea required placeholder="Masukkan keterangan Kompetensi Keahlian" class="form-control" name="keterangan_keahlian" id="keterangan_keahlian" cols="30" rows="5"></textarea>
					<small class="text-danger"><?= form_error('keterangan_keahlian') ?></small>
				</div>
				<button type="submit" class="btn btn-sm btn-success"><i class="fas fa-fw fa-check"></i> Simpan</button>
				<button type="reset" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i> Reset</button>
				
			</div>
			
		</div>
		</div>
	</div>
</form>

