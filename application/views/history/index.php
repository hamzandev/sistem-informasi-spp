<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h4>History Transaksi Pembayaran</h4>
			</div>
			<div class="card-body">
				<table id="tb_komp_keahlian" class="table table-stripped table-bordered">
					<thead class="table-dark rounded">
						<tr>
							<th>#</th>
							<th>ID Pembayaran</th>
							<th>Nama Petugas</th>
							<th>NISN Siswa</th>
							<th>Nama Siswa</th>
							<th>Tgl. bayar</th>
							<th>Bulan Yang Dibayar</th>
							<th>Jumlah Dibayar</th>
							<?php if($this->session->has_userdata('user_level')) : ?>
								<th>Aksi</th>
							<?php endif ?>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; foreach($history as $s): ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $s->id_pembayaran ?></td>
								<td><?= $s->nama_petugas ?></td>
								<td><?= $s->nisn ?></td>
								<td><?= $s->nama ?></td>
								<td><?= $s->tgl_bayar ?></td>
								<td><?= $s->bulan_dibayar ?></td>
								<td>Rp.<?= $s->jumlah_bayar ?></td>
								<?php if($this->session->has_userdata('user_level')) : ?>
									<td>
										<a href="<?= base_url('laporan/pembayaran?idpembayaran='.$s->id_pembayaran) ?>" class="btn btn-primary btn-sm">
											<i class="fas fa-print"></i>
											 Export PDF
										</a>
									</td>
								<?php endif ?>
							</tr>
						<?php endforeach ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>