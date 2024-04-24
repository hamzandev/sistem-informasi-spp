  <div class="col-xl-5 col-lg-12 col-md-9 pt-5">
	<div class="card o-hidden border-0 shadow-lg my-5">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">
				<div class="col-12 mx-auto">
					<div class="p-5">
						<?= $this->session->flashdata('message'); ?>
						<div class="text-center">
							<img src="<?= base_url('assets/img/logo.png') ?>" width="200px" alt="logo">
							<h1 class="h4 text-gray-900 mb-4 mt-2">Silahkan Login</h1>
						</div>
						<form class="user" method="post" action="<?= base_url('auth') ?>">
							<div class="form-group">
								<input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username / NISN" value="<?= set_value('username') ?>">
									<small class="text-danger text-right"><?= form_error('username') ?></small>
							</div>
							<div class="form-group">
								<input type="password" class="form-control form-control-user"
									id="password" name="password" placeholder="Password">
									<small class="text-danger text-right"><?= form_error('password') ?></small>
							</div>
							<div class="form-group">
								<div class="custom-control custom-checkbox small">
									<input type="checkbox" class="custom-control-input" id="showPwd">
									<label class="custom-control-label" for="showPwd">Show Password</label>
								</div>
							</div>
							<button type="submit" class="btn btn-primary btn-user btn-block">
								Login
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
