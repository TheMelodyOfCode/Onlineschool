<?php require_once __DIR__ . "../../../../../mainsrc/Design/userheader.php"; ?>



<div class="modal modal-tour position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalTour">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-6 shadow">
      <div class="modal-body p-5">
        <h2 class="fw-bold mb-0"><?php echo $singleUser->username;?></h2>

        <ul class="d-grid gap-4 my-5 list-unstyled">
          <li class="d-flex gap-4">
            <svg class="bi text-muted flex-shrink-0" width="48" height="48"><use xlink:href="#grid-fill"/></svg>
            <div>
              <h5 class="mb-0 text-primary">About Me:</h5>
              <?php echo "<br>" . $singleUser["bio"]; ?>
            </div>
          </li>
          <li class="d-flex gap-4">
            <svg class="bi text-warning flex-shrink-0" width="48" height="48"><use xlink:href="#bookmark-star"/></svg>
            <div>
            <a class="sidebarLink" href="mailto:<?php echo $singleUser->mail  ?>" class="icon-link">
            <?php echo $singleUser->mail  ?>
            </a>
              <br>
              <br>
              <p>Give me a shot if you like.</p>
            </div>
          </li>
        </ul>
        <a href="/Dashboard" ><button type="button" class="btn btn-lg btn-primary w-100" data-bs-dismiss="modal">Dashboard</button></a>
      </div>
    </div>
  </div>
</div>




<?php require_once __DIR__ . "../../../../../mainsrc/Design/footer.php" ?>