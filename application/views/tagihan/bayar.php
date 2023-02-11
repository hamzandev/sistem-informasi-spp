<form action="<?= base_url('transaksi/bayar/'.$tagihan[0]->nisn) ?>" method="post">

<div class="row">
	<div class="col-md-5">
		<div class="card">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h4>Bayar Tagihan SPP</h4>
			</div>
			<div class="card-body">
					<div class="form-group mb-3">
						<label for="id_pembayaran">Kode Pembayaran</label>
						<input readonly value="<?= 'PBYR-'.date('dmY').rand(10,99) ?>" type="text" name="id_pembayaran" class="form-control">
					</div>
					<div class="form-group mb-3">
						<label for="nisn">NISN Siswa</label>
						<input readonly value="<?= $tagihan[0]->nisn ?>" type="number" name="nisn" class="form-control">
					</div>
					<div class="form-group mb-3">
						<label for="tgl_bayar">Tgl. Bayar</label>
						<input readonly value="<?= date('Y-m-d') ?>" type="text" name="tgl_bayar" class="form-control">
					</div>
					<div class="form-group mb-3">
						<label for="">Tagihan Bulan yang akan dibayar</label>
						<select class="form-control" name="bulan_dibayar" >
							<?php foreach($tagihan as $j): ?>
								<option value="<?= $j->bulan ?>"><?= $j->bulan ?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
		</div>
	</div>

	<div class="col-md-5">
		<div class="card">
			<div class="card-body">
					<div class="form-group mb-3">
						<label for="tahun_dibayar">Tahun Dibayar</label>
						<input readonly value="<?= date('Y') ?>" type="text" name="tahun_dibayar" class="form-control">
					</div>
					<div class="form-group mb-3">
						<label for="id_spp">Jumlah Dibayar (Harga SPP/bulan)</label>
						<select readonly class="form-control" name="id_spp" >
							<?php foreach($spp as $j): ?>
								<option <?= $j->tahun == date('Y') ? 'selected' : '' ?> value="<?= $j->id_spp ?>"><?= $j->tahun ?> - <?= $j->nominal ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group mb-3">
						<label for="jumlah_bayar">Jumlah Dibayar</label>
						<input required autofocus type="number" name="jumlah_bayar" class="form-control">
						<small class="text-danger"><?= form_error('jumlah_dibayar') ?></small>
					</div>
					<button type="submit" class="btn btn-sm btn-success"><i class="fas fa-fw fa-check"></i> Simpan</button>
					<button type="reset" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i> Reset</button>
			</div>
		</div>
	</div>
</div>

</form>
