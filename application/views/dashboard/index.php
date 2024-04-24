<h3>Dashboard</h3>
<div class="row">

	<!-- Tasks Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-info shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Transaksi (History)
						</div>
						<div class="row no-gutters align-items-center">
							<div class="col-auto">
								<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">140</div>
							</div>
						</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-credit-card fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php if($this->session->userdata('user_level') == 'admin' || $this->session->userdata('user_level') == 'petugas') : ?>
		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								Siswa (Total)</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">420</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-users fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Annual) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
								Jumlah Kelas</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">17</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-home fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Pending Requests Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
								Petugas (Total)</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-user fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif ?>
</div>

<!-- <div class="row">
	<div class="col-md-10">
		<div class="card">
			<div class="card-header">
				<h4>Highlight History Transaksi</h4>
			</div>
			<div class="card-body">
				<table id="tb_dashboard" class="table table-stripped table-sm table-bordered">
					<thead class="table-dark rounded">
						<tr>
							<th>Kode Transaksi</th>
							<th>NISN Siswa</th>
							<th>Tanggal</th>
							<th>Jumlah Bayar</th>
							<th>Bulan Dibayar</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>TRS-912FEX20</td>
							<td>0129203834</td>
							<td>03-02-2023</td>
							<td>Rp.1.200,00</td>
							<td>6 Bulan</td>
						</tr>
						<tr>
							<td>TRS-912FEX20</td>
							<td>0129203834</td>
							<td>03-02-2023</td>
							<td>Rp.1.200,00</td>
							<td>6 Bulan</td>
						</tr>
						<tr>
							<td>TRS-912FEX20</td>
							<td>0129203834</td>
							<td>03-02-2023</td>
							<td>Rp.1.200,00</td>
							<td>6 Bulan</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div> -->