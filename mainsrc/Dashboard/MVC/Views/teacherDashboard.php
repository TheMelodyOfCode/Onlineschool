<?php require_once __DIR__ . "../../../../../mainsrc/Design/userheader.php"; ?>

<br>
<br>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Welcome Home <?php echo $singleUser->username ?></h1>
        <br>
        <p class="lead text-muted">TEACHER DASHBOARD below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
      </div>
    </div>
  </section>

  <div class="b-example-divider"></div>

<div class="album  bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">

      <div class="col">
            <div class="card">
                    <img style="width: 100px; margin: auto; padding: 10px" src="../../../../../onlineschool/mainsrc/UserDashboard/MVC/Views/Medien/settings.gif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Your learning Area</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/UserDashboard/learningArea" class="btn btn-success">Go to your learning Area</a>
                    </div>
            </div>
        </div>

        <div class="col">

        <div class="card">
                <img style="width: 100px; margin: auto; padding: 10px" src="../../../../../onlineschool/mainsrc/UserDashboard/MVC/Views/Medien/photo-64.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Your Documents and Homework</h5>
                    <p class="card-text">Upload your homework here. <br>
                     You also can update your documents description or title here</p>
                    <a href="/Documents" class="btn btn-success">Go to your documents</a>
                </div>
            </div>
        </div>

        <div class="col">

        <div class="card">
        <img style="width: 100px; margin: auto; padding: 10px" src="../../../../../onlineschool/mainsrc/UserDashboard/MVC/Views/Medien/users-96.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Students </h5>
                    <p class="card-text"> Get in contact with your fellow students and learn together</p>
                    <a href="/Users" class="btn btn-success">See who's also studying</a>
                </div>
            </div>
        </div>



        <div class="col">

        <div class="card">
                <img style="width: 100px; margin: auto; padding: 10px" src="../../../../../onlineschool/mainsrc/UserDashboard/MVC/Views/Medien/user-96.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Update your Profile</h5>
                    <p class="card-text">Here you can make changes to your Name, Email and Password</p>
                    <a href="/Users/userprofile?userid=<?php echo $_SESSION["userid"] ?>" class="btn btn-success">Go to your Profil</a>
                </div>
            </div>

        </div>

  
    </div>
  </div>
  <br>
  <div class="b-example-divider"></div>
  <br>
  <br>

<?php require_once __DIR__ . "../../../../../mainsrc/Design/footer.php" ?>

