<div class = "container-fluid">

<div class="alert alert-success" role="alert">
    <i class="fas fa-university"> Post Content</i>
  </div>

  <?php echo $this->session->flashdata('pesan') ?>
	<?php echo anchor('UserController/tambah_user',
    '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>
     Tambah Data User</button>') ?>

    

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>No.</th>
			<th>Username</th>
			<th>Password</th>	
			<th>Name</th>	
			<th>Role</th>	
			
			<th colspan="2">AKSI</th>

		</tr>

		<?php 
		$no=1;
		foreach($post as $p) :  ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $p->username ?></td>
			<td><?php echo $p->password ?></td>
			<td><?php echo $p->name ?></td>
      		<td><?php echo $p->role ?></td>
			<td><?php echo anchor('UserController/edit/' .$p->username,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
			<td onclick="javascript: return confirm('Anda Yakin ?')"><?php echo anchor('UserController/hapus/' .$p->username,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
 		</tr>

	<?php endforeach; ?>

</table>
</div>

