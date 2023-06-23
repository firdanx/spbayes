<section id="kontak" class="call-to-action-area section-gap " style="background-image: -webkit-linear-gradient(0deg, #ffffff 0%, #ffffff 100%) !important;" >
	<div class="container">
	<?php echo form_open()?>
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-6">
				<div class="title text-center"> 
					 METODE BAYES
				</div>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="col-md-12 col-md-offset-2" >
				<?php foreach($listKelompok->result() as $value){?>
					<input type="checkbox" name="gejala[]" value="<?php echo $value->id?>" > <?php echo $value->kode." - ".$value->nama_gejala?> <br>
			<?php } ?>
			</div>
		</div>
		<br>
		<div class="row d-flex justify-content-center">
			<div class="col-md-12" style="float: left; padding: 0;">
				<button type="submit" name="submit" class="btn main-btn" style="background-color: #41C1FF;  border-radius: 0px;">Proses</button>
			</div>
		</div>
	</div>
	<?php echo form_close()?>
</section>

