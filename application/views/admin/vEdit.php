<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA KANDIDAT</h3>


	<?php foreach($kandidat as $knd) : ?>

	<form method="post" action="<?php echo base_url(). 'ContentController/update' ?>">
		
		<div class="form-group">
			 <label>Title</label>
			 <input type="text" name="title" class="form-control"
			 value="<?php echo $knd->title ?>">

		</div>

		<div class="form-group">
			 <label>Content</label>
			  <input type="hidden" name="idpost" class="form-control"
			 value="<?php echo $knd->idpost ?>">
			 <input type="text" name="content" class="form-control"
			 value="<?php echo $knd->content ?>">

		</div>

		<div class="form-group">
			 <label>Tanggal</label>
			 <input type="date" name="date" class="form-control"
			 value="<?php echo $knd->date ?>">

		</div>

		


		<button type="submit" class="btn btn-primary btn-sm mt-3" > Simpan </button>


	</form>


	<?php endforeach; ?>
	

</div>	