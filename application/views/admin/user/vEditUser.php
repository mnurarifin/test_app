<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA USER</h3>


	<?php foreach($usr as $u) : ?>

	<form method="post" action="<?php echo base_url(). 'UserController/update' ?>">
		
		<div class="form-group">
			 <label>Username</label>
			 <input type="text" name="username" class="form-control"
			 value="<?php echo $u->username ?>">

		</div>

		<div class="form-group">
			 <label>Password</label>
			 <input type="text" name="password" class="form-control"
			 value="<?php echo $u->password ?>">

		</div>

		<div class="form-group">
			 <label>Nama</label>
			 <input type="text" name="name" class="form-control"
			 value="<?php echo $u->name ?>">

		</div>
		<div class="form-group">
			 <label>Role</label>
			 <select name="role">
				<option value="1">Admin</option>
				<option value="2">Author</option>
			 </select>
			 

		</div>

		


		<button type="submit" class="btn btn-primary btn-sm mt-3" > Simpan </button>


	</form>


	<?php endforeach; ?>
	

</div>	