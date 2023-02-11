<div class="row">
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
				<table id="tb_komp_keahlian" class="table table-stripped table-sm table-bordered">
					<thead class="table-dark rounded">
						<tr>
							<th>#</th>
							<th>ID Pembayaran</th>
							<th>Nama Petugas</th>
							<th>NISN Siswa</th>
							<th>Nama Siswa</th>
							<th>Tgl. bayar</th>
							<th>Jumlah Dibayar</th>
							<th>Aksi</th>
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
								<td><?= $s->jumlah_bayar ?></td>
								<td>
									<a href="<?= base_url('print/'.$s->id_pembayaran) ?>" class="btn btn-primary btn-sm">
										<i class="fas fa-edit"></i>
									</a>
								</td>
							</tr>
						<?php endforeach ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>