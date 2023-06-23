<?php echo form_open('regist_user/create'); ?>

<section id="kontak" class="call-to-action-area section-gap " style="background-image: -webkit-linear-gradient(0deg, #ffffff 0%, #ffffff 100%) !important;" >
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-6">
				<div class="title text-center">
					<h2 style="margin-bottom: 0px;">Sistem Pakar</h2>
					<h2>METODE BAYES</h2>
					<p>Silahkan lakukan registrasi untuk malanjutkan</p>
				</div>
			</div>
		</div>

		<div class="row d-flex justify-content-center">
			<div class="col-md-6 col-md-offset-2" >
				<label for="nama">Nama</label>
				<input type="text" name="nama" class="form-control" style="border:1px solid #10161A; border-radius: 0px;" placeholder="Masukkan Nama" required="required"><br>

				<label for="email">Email</label>
				<input type="text" name="email" class="form-control" style="border:1px solid #10161A; border-radius: 0px;" placeholder="Masukkan Email" required="required"><br>

				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" style="border:1px solid #10161A; border-radius: 0px;" placeholder="Masukkan Username" required="required"><br>

				<label for="password">Password</label>
				<input type="password" name="password" class="form-control" style="border:1px solid #10161A;  border-radius: 0px;" placeholder="Masukkan Password" required="required"><br>

				<div class="col-md-6" style="float: left; padding: 0;">
					<button type="submit" name="submit" class="btn main-btn" style="background-color: #41C1FF;  border-radius: 0px;">Daftar</button>
				</div>

				<div class="col-md-6" style="float: left; padding: 15px 0 15px 15px; text-align: right;">
					<span style="font-size: 14px;">Sudah punya akun?</span><a href="<?php echo site_url() ?>/login_user" style="font-size: 14px;">  Login disini</a>
				</div>

				<p style="color: red; font-size: 15px;">Setelah melakukan pendaftaran, silahkan cek email untuk melakukan konfirmasi</p>
			</div>
		</div>							
		
		
	</div>	
</section>

<?php echo form_close(''); ?>