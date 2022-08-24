<?php require_once __DIR__ . "../../../../../mainsrc/Design/userheader.php"; ?>
<?php // echo $album1->albumdescription; ?>


<section class="mt-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <!-- TODO: add gallery to Teacher section user are not supposed to uplaod photos -->
      <h1 class="fw-light">Gallery </h1>
        <p class="lead text-muted">here are Photos of all last events</p>
      </div>
    </div>
  </section>


  <div class="b-example-divider"></div>


    <div class="container">

        <div class="row">

        <?php foreach($allAlbums As $item) : ?>
          <div class="col-lg-4 my-2">
            <div  class="card" style="max-width: 300px">
              <a href="onlineschool/mainsrc/UploadPhotos/<?php  echo $item->albumcover ?>"> 
              <img style="max-width: 300px"
                src="onlineschool/mainsrc/UploadPhotos/<?php  echo $item->albumcover ?>"
                class="card-img-top rounded mx-auto d-block" 
       
                alt="Waterfall" 
              />
              </a>
              <div  class="card-body">
                <h5 class="card-title"><?php  echo html($item->albumname) ?></h5>
                <p class="card-text">
                <?php  echo html($item->albumdescription); ?>
                </p>
              </div>
            </div>
          </div>
          <?php endforeach; ?> 




        </div>
  <!-- Inner -->
</div>
<!-- Carousel wrapper -->
<div class="b-example-divider"></div>
   <br>
   <br>
   <br>
   <br>

<?php require_once __DIR__ . "../../../../../mainsrc/Design/footer.php" ?>


