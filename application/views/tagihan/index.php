<?php if(!isset($data_tagihan)) : ?>
	<div class="row">
		<div class="col-md-7">
			<div class="card">
				<div class="card-header">
					<h4>Cek / Cari Tagihan Siswa</h4>
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
<?php endif ?>


<?php if(isset($data_tagihan)) : ?>

	<?php if(count($data_tagihan) <= 0) : ?>
		<!-- jika tagihan dengan nisn tertentu tidak ada -->
		<div class="col-6 mx-auto pt-5">
			<h2 class="text-center">Data tidak ditemukan!</h2>
			<a href="<?= base_url('tagihan') ?>" style="max-width: max-content;" class="d-block mx-auto btn btn-primary btn-sm"><i class="fas fa-arrow-left"></i>
			Kembali
		</a>
		</div>
	<?php else : ?>
		<!-- Tampilkan data tagihan -->
		<div class="row mt-5">
			<div class="col-md-10">
				<div class="alert alert-info mb-3">
					<div class="row">
						<div class="col-md-6">
							<span class="text-muted d-block">Nominal yang telah dibayar :</span>
							<h3 class="text-end">Rp. <?= number_format($subtotal_dibayar, 0, ".", ".") ?>,00</h3>
						</div>
						<div class="col-md-6">
							<span class="text-muted d-block">Nominal yang belum dibayar :</span>
							<h3 class="text-end">Rp. <?= number_format($subtotal_belum_dibayar, 0, ".", ".") ?>,00</h3>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header d-flex justify-content-between align-items-center">
						<h4>Menampilkan Tagihan Siswa : <small class="badges bg-warning text-light px-1 rounded"><?= $this->input->post('nisn'); ?></small></h4>
						
						<?php if($data_tagihan_belum_dibayar) : ?>
							<a href="<?= base_url('transaksi/bayar/'.$data_tagihan[0]->nisn) ?>" class="btn btn-lg btn-success">
								<i class="fas fa-dollar-sign"></i> Bayar Tagihan
							</a>
						<?php endif?>
					</div>
					<div class="card-body">
						<!-- Jika sudah lunas -->
						<?php if(!$data_tagihan_belum_dibayar) : ?>
							<div class="alert alert-sm alert-success">Tagihan untuk 1 tahun telah Lunas! 
								<a href="<?= base_url('history?nisn='.$data_tagihan[0]->nisn) ?>" class="text-primary">
									Lihat Histori Pembayaran
								</a>
							</div>
						<?php endif ?>
						<table id="tb_komp_keahlian" class="table table-stripped table-sm table-bordered">
							<thead class="table-dark rounded">
								<tr>
									<th>#</th>
									<th>Tagihan Bulan</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; foreach($data_tagihan as $s): ?>
									<tr>
										<td><?= $i++ ?></td>
										<td><?= $s->bulan ?></td>
										<td>
											<?= $s->status == 'Belum Dibayar' ? 
											'<small class="badges px-1 rounded text-light bg-danger">'.$s->status.'</small>' : 
											'<small class="badges px-1 text-light rounded bg-success">'.$s->status.'</small>' ?>
										</td>
										<!-- <td>
											<a href="<?= base_url('kompetensi_keahlian/edit/'.$s->id_komp_keahlian) ?>" class="btn btn-primary btn-sm">
												<i class="fas fa-edit"></i>
											</a>
											<a onClick="return confirm('Data akan terhapus permanen. Yakin Hapus?')" href="<?= base_url('kompetensi_keahlian/hapus/'.$s->id_komp_keahlian) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
										</td> -->
									</tr>
								<?php endforeach ?>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	<?php endif ?>

<?php endif ?>
