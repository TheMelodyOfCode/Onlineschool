<?php require_once __DIR__ . "../../../../../mainsrc/Design/userheader.php"; ?>
<?php // echo $album1->albumdescription; ?>


<section class="mt-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <!-- TODO: add gallery to Teacher section user are not supposed to uplaod photos -->
      <h1 class="fw-light">Deine Alben <?php echo $_SESSION["username"] ?></h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      </div>
    </div>
  </section>



  <!-- Inner -->

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

<!-- Carousel wrapper -->
   <br>
   <br>
   <br>
   <br>

<?php require_once __DIR__ . "../../../../../mainsrc/Design/footer.php" ?>


