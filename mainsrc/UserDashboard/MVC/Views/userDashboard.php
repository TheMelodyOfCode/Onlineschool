<?php require_once __DIR__ . "../../../../../mainsrc/Design/userheader.php"; ?>

<br>
<br>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Willkommen Zuhause <?php echo $_SESSION["username"] ?></h1>
        <br>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
      </div>
    </div>
  </section>

<div class="album  bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
        <div class="col">

        <div class="card">
                <img style="width: 100px; margin: auto; padding: 10px" src="../../../../../onlineschool/mainsrc/UserDashboard/MVC/Views/Medien/photo-64.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Deine Dokumente</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/LearningArea" class="btn btn-success">Zu den Alben</a>
                </div>
            </div>
        </div>

        <div class="col">

        <div class="card">
        <img style="width: 100px; margin: auto; padding: 10px" src="../../../../../onlineschool/mainsrc/UserDashboard/MVC/Views/Medien/users-96.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Deine Kommilitonen </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/Users" class="btn btn-success">Zu deinen Kommilitonen</a>
                </div>
            </div>
        </div>

        <div class="col">

            <div class="card">
                    <img style="width: 100px; margin: auto; padding: 10px" src="../../../../../onlineschool/mainsrc/UserDashboard/MVC/Views/Medien/settings.gif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Settings</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-success">Zu den Setting</a>
                    </div>
                </div>

            </div>

        <div class="col">

        <div class="card">
                <img style="width: 100px; margin: auto; padding: 10px" src="../../../../../onlineschool/mainsrc/UserDashboard/MVC/Views/Medien/user-96.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dein Profil</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-success">Zu deinem Profil</a>
                </div>
            </div>

        </div>

  
    </div>
  </div>
  <br>
  <br>
  <br>

<?php require_once __DIR__ . "../../../../../mainsrc/Design/footer.php" ?>

