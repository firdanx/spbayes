       				<div class="container">
					<div class="row justify-content-end fullscreen align-items-center">
						<div class="col-lg-6 col-md-12 banner-left">
								<h1 class="text-white">
									 
									konsultasikan segera..						
								</h1>
								<p class="mx-auto text-white  mt-20 mb-40">
									METODE BAYES
								</p>
								<?php 
								if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'pasien'){
								?>
								<a href="<?php echo site_url() ?>/welcome/diagnosa" class="text-uppercase header-btn">Diagnosa Sekarang <i class="fa fa-arrow-right"></i></span></a>
								<?php } else{ ?>
								<a href="<?php echo site_url() ?>/login_user" class="text-uppercase header-btn">Diagnosa Sekarang <i class="fa fa-arrow-right"></i></span></a>
								<?php } ?>
						</div>
						<div class="col-lg-6 col-md-12 no-padding banner-right">
							<img style="height: 570px; width: 700px; margin-bottom: 30px;" src="<?php echo base_url() ?>assets/templateuser/img/img_banner3.png" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			

			<!-- Start service Area -->
			 
			
			<!-- Start call-to-action Area -->
			 

			 
