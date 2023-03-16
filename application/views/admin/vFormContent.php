<div class = "container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-university">FORM INPUT KONTEN</i>
	</div>

	<?php echo form_open_multipart('ContentController/tambah_aksi') ?>

	<div class="form-group">
		<label>Judul</label>
		<input type="text" name="title" class="form-control" placeholder=
		"Masukan Judul" autocomplete="off" autofocus>
		<?php echo form_error('title','<div class="text-danger
		small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>Content</label>
		<input type="text" name="content" class="form-control" placeholder=
		"Masukan Content" autocomplete="off" autofocus>
		<?php echo form_error('content','<div class="text-danger
		small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>Date</label>
		<input type="date" class="form-control col-md-3" name="date" placeholder=
		"Masukan Tanggal" autocomplete="off">
		<?php echo form_error('date','<div class="text-danger
		small ml-3">','</div>') ?>
	</div>	

		<button type="submit" class="btn btn-primary mt-3" > Simpan </button>


	<?php form_close(); ?>


</div>