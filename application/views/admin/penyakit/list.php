<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<h3>Daftar Penyakit</h3>

			<br>
			<a href="<?php echo site_url('/penyakit/create') ?>" class="btn btn-primary" style="border-radius: 0px; font-size: 12px; background:#3EA8FF; border-color: #3EA8FF;"><i class="fa fa-plus-circle"></i> Tambah Penyakit</a>
			<br><br>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>NO</th>
						<th>Kode Penyakit</th>
						<th>Nama penyakit</th>
						<th>Keterangan</th>
						<th>Nilai</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no= 1; foreach ($kelompok_data as $data): ?>	
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $data->kode ?></td>
						<td><?php echo $data->nama ?></td>
						<td><?php echo $data->keterangan ?></td>
						<td><?php echo $data->nilai ?></td>
						<td  style="text-align: center; width: 200px;">
							<a href="<?php echo site_url('/penyakit/edit/').$data->id ?>" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677B; border-color: #51677B;"><i class="fa fa-edit"></i> Edit</a>
							<a href="<?php echo site_url('/penyakit/hapus/').$data->id ?>" class="btn btn-danger btn-sm" style="border-radius: 0px;" onclick="javasciprt: return confirm('Apakah anda yakin ?')"><i class="fa fa-trash"></i> Hapus</a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>