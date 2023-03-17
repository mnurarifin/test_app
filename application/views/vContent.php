<body>
<div class="container-fluid">

<!-- <div class="alert alert-success" role="alert">
    <h5 class="alert-heading fas fa-poll"> Halaman Author</h5>
    
  </div> -->
    <br><br>
      <div class="row text-center">

      <?php foreach ($post as $knd) : ?>

       <div class="card ml-5" style="width: 18rem; ">
          
          <div class="card-body">
            <h2 class="card-title"><?php echo $knd->title ?></h2>
            <p class="card-title"><?php echo $knd->username ?><?php echo $knd->date ?></p>
            <p class="card-title"></p>
            <h5 class="card-title"><?php echo $knd->content ?></h5>

  
          </div>
        </div>

         <?php endforeach; ?>

            </div>
            </div>
</body>