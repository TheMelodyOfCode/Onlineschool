<?php require_once __DIR__ . "../../../../../mainsrc/Design/userheader.php";?>




<br>
<section class=" mt-4 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-5 col-md-8 mx-auto">
        <h1 class="fw-light">Assistant Teachers</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
      </div>
    </div>
  </section>


  <div  class="album  bg-light">
    <div class="text-center container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2">
        <div class="col my-3">
            <div style="background-color: #8C540C" class="feature-icon  bg-gradient">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
            </div>
            <h2><?php echo $rick["username"];  ?></h2>
            <p><?php echo $rick->bio;  ?></p>
            <a class="sidebarLink" href="mailto:<?php echo $rick->mail  ?>" class="icon-link">
              Contact me
            </a>
        </div>

        <div class="col my-3">
              <div style="background-color: #8C540C" class="feature-icon  bg-gradient">
                <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
              </div>
              <h2><?php echo $summer->username;  ?></h2>
              <p><?php echo $summer->bio ; ?></p>
              <a class="sidebarLink" href="mailto:<?php echo $summer->mail ; ?>" class="icon-link">
                Contact me
              </a>
        </div>

        <div class="col my-3">
            <div style="background-color: #8C540C" class="feature-icon  bg-gradient">
              <svg class="bi" width="1em" height="1em"> <use xlink:href="#people-circle"/> </svg>
            </div>
            <h2><?php echo $morty->username;  ?></h2>
            <p><?php echo $morty->bio  ?></p>
            <a class="sidebarLink" href="mailto:<?php echo $morty->mail  ?>" class="icon-link">
              Contact me
            </a>
        </div>


        <div class="col my-3">
              <div style="background-color: #8C540C" class="feature-icon  bg-gradient">
                <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
              </div>
              <h2><?php echo $jerry->username;  ?></h2>
              <p><?php echo $jerry->bio  ?></p>
              <a class="sidebarLink" href="mailto:<?php echo $jerry->mail  ?>" class="icon-link">
                Contact me
              </a>
        </div>

      
    </div>
  </div>
  <br>
  <br>
  <br>




<?php require_once __DIR__ . "../../../../../mainsrc/Design/footer.php" ?>


