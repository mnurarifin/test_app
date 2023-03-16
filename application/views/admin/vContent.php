<div class = "container-fluid">

<div class="alert alert-success" role="alert">
    <i class="fas fa-university"> Post Content</i>
  </div>

  <?php echo $this->session->flashdata('pesan') ?>
	<?php echo anchor('ContentController/tambah_content',
    '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>
     Tambah Data Content</button>') ?>

    

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>No.</th>
			<th>Title</th>
			<th>Content</th>	
			<th>Tanggal</th>	
			<th>Username</th>	
			
			<th colspan="2">AKSI</th>

		</tr>

		<?php 
		$no=1;
		foreach($post as $p) :  ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $p->title ?></td>
			<td><?php echo $p->content ?></td>
			<td><?php echo $p->date ?></td>
      		<td><?php echo $p->username ?></td>
			<td><?php echo anchor('ContentController/edit/' .$p->idpost,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
			<td onclick="javascript: return confirm('Anda Yakin ?')"><?php echo anchor('ContentController/hapus/' .$p->idpost,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
 		</tr>

	<?php endforeach; ?>

</table>
</div>

