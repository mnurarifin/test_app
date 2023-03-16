<div class = "container-fluid">

	<div class="alert alert-success" role="alert">
		<i class="fas fa-university">FORM INPUT USER</i>
	</div>

	<?php echo form_open_multipart('UserController/tambah_aksi') ?>

	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" placeholder=
		"Masukan Username" autocomplete="off" autofocus>
		<?php echo form_error('username','<div class="text-danger
		small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" placeholder=
		"Masukan Password" autocomplete="off" autofocus>
		<?php echo form_error('password','<div class="text-danger
		small ml-3">','</div>') ?>
	</div>

	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control col-md-3" name="name" placeholder=
		"Masukan name" autocomplete="off">
		<?php echo form_error('name','<div class="text-danger
		small ml-3">','</div>') ?>
	</div>	

	<div class="form-group">
		<label>Role</label>
		<select name="role" >
			<option value="1">Admin</option>
			<option value="2">Author</option>
		</select>
	</div>	

		<button type="submit" class="btn btn-primary mt-3" > Simpan </button>


	<?php form_close(); ?>


</div>