<?php require_once __DIR__ . "../../../../../mainsrc/Design/teacherheader.php"; ?>

<br>
<br>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Welcome Home <?php echo $singleUser->username ?></h1>
        <br>
        <p class="lead text-muted">TEACHER DASHBOARD check homework of yor students , add pictures to the Gallery or change the free, pro or enterprise content </p>
      </div>
    </div>
  </section>

  <div class="b-example-divider"></div>


    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">

      <div class="col">
      <div class="card">
                <img style="width: 100px; margin: auto; padding: 10px" src="../../../../../onlineschool/mainsrc/Dashboard/MVC/Views/Medien/photo-64.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Documents and Homework of your Students</h5>
                    <p class="card-text">
                     Here you can access and check all student documents</p>
                    <a href="/TeacherDocs" class="btn btn-success">Go to documents</a>
                </div>
            </div>
        </div>


        

        <div class="col">

        <div class="card">
        <img style="width: 100px; margin: auto; padding: 10px" src="../../../../../onlineschool/mainsrc/Dashboard/MVC/Views/Medien/users-96.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Students </h5>
                    <p class="card-text"> Information about all students</p>
                    <a href="/Users" class="btn btn-success">See who's there</a>
                </div>
            </div>
        </div>

        <div class="col">

        <div class="card">
        <img style="width: 100px; margin: auto; padding: 10px" src="../../../../../onlineschool/mainsrc/Dashboard/MVC/Views/Medien/photo2-64.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Gallery </h5>
                    <p class="card-text"> here you can edit and upload Photos for the gallery</p>
                    <a href="/Photoalbum" class="btn btn-success">Add some Photos</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                    <img style="width: 100px; margin: auto; padding: 10px" src="../../../../../onlineschool/mainsrc/Dashboard/MVC/Views/Medien/settings.gif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Your Documents</h5>
                        <p class="card-text">Here is some space for your Documents</p>
                        <a href="/Documents" class="btn btn-success">Go to documents</a>
                    </div>
            </div>
        </div>



        <div class="col">
        <div class="card">
                <img style="width: 100px; margin: auto; padding: 10px" src="../../../../../onlineschool/mainsrc/Dashboard/MVC/Views/Medien/user-96.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Update your Profile</h5>
                    <p class="card-text">Here you can make changes to your Name, Email and Password</p>
                    <a href="/Users/userprofile?userid=<?php echo $_SESSION["userid"] ?>" class="btn btn-success">Go to your Profil</a>
                </div>
            </div>

        </div>

        <div class="col">
        <div class="card">
                <img style="width: 100px; margin: auto; padding: 10px" src="../../../../../onlineschool/mainsrc/Dashboard/MVC/Views/Medien/learning3-64.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Update Free Learning Area</h5>
                    <p class="card-text">Here you can make changes to the content of the free learning area</p>
                    <a href="/UpdateFreelearning" class="btn btn-success">Free Learning Area</a>
                </div>
            </div>
        </div>

        <div class="col">
        <div class="card">
                <img style="width: 100px; margin: auto; padding: 10px" src="../../../../../onlineschool/mainsrc/Dashboard/MVC/Views/Medien/learning2-64.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Update Pro Learning Area</h5>
                    <p class="card-text">Here you can make changes to the content of the Pro learning area</p>
                    <a href="/UpdateProlearning" class="btn btn-success">Pro Learning Area</a>
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

