<?php echo form_open('login_user/login'); ?>

<section id="kontak" class="call-to-action-area section-gap " style="background-image: -webkit-linear-gradient(0deg, #ffffff 0%, #ffffff 100%) !important;" >
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-6">
				<div class="title text-center">
					<h2 style="margin-bottom: 0px;">Sistem Pakar</h2>
					<h2>METODE BAYES</h2>
					<p>Silahkan masukkan username dan password untuk malanjutkan</p>
				</div>
			</div>
		</div>

		<div class="row d-flex justify-content-center">
			<div class="col-md-6 col-md-offset-2" >
				<p><?php echo $this->session->flashdata('error') ?></p>
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" style="border:1px solid #10161A; border-radius: 0px;" placeholder="Masukkan username" required="required"><br>

				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" style="border:1px solid #10161A;  border-radius: 0px;" placeholder="Masukkan password" required="required"><br>

				<div class="col-md-6" style="float: left; padding: 0;">
					<button type="submit" name="submit" class="btn main-btn" style="background-color: #41C1FF;  border-radius: 0px;">Masuk</button>
				</div>
				<div class="col-md-6" style="float: left; padding: 0;">
					<!-- <a href="" style="font-size: 14px;">Lupa kata sandi?</a><br> -->
					<span style="font-size: 14px;">Belum punya akun?</span><a href="<?php echo site_url() ?>/regist_user" style="font-size: 14px;">  Daftar sekarang</a>
				</div>
			</div>
		</div>							
		
		
	</div>	
</section>

<?php echo form_close(''); ?>