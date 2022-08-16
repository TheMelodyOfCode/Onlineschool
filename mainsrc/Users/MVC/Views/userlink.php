<?php require_once __DIR__ . "../../../../../mainsrc/Design/userheader.php"; ?>


<br>
<section class=" mt-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-5 col-md-8 mx-auto">
        <h1 class="fw-light">Deine Mitstudenten</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
      </div>
    </div>
  </section>


  <div  class="album  bg-light">
    <div class="text-center container">
      <div class="row row-cols-1 row-cols-sm-4 row-cols-md-4">

    <?php     foreach ($getmembers AS $user):  ?>
        <div class="col my-3">
            <div style="background-color: #8C540C" class="feature-icon  bg-gradient">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
            </div>
            <a href="/Users/userlink?userid=<?php echo $user->userid ?>"><h3><?php echo $user->username ?></h3></a>
        </div>
    <?php endforeach; ?>   
 
    </div>
  </div>
  <br>
  <br>
  <br>


 



    
        
         

        

    
<?php require_once __DIR__ . "../../../../../mainsrc/Design/footer.php" ?>
