
	<div class="row">
		<div class="col-md-7">
			<div class="card">
				<div class="card-header">
					<h4>Cari Tagihan Siswa sebelum melakukan Transaksi</h4>
				</div>
				<div class="card-body">
					<form method="POST" action="<?= base_url('tagihan') ?>">
						<div class="form-group mb-3">
							<label for="nisn">NISN Siswa</label>
							<input required placeholder="ex : 1234567890 (10 digit)" type="number" name="nisn" class="form-control">
							<small class="text-danger"><?= form_error('nisn') ?></small>
						</div>
						<div class="d-flex justify-content-end"><button type="submit" class="btn btn-sm btn-success"><i class="fas fa-fw fa-search"></i> Cari</button></div>
					</form>
				</div>
			</div>
		</div>
	</div>

