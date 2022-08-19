<?php require_once __DIR__ . "../../../../../mainsrc/Design/userheader.php"; ?>


<br>
<section class=" mt-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-5 col-md-8 mx-auto">
        <h1 class="fw-light">Update Your Profil <?php echo $singleUser->username ?></h1>
        <p class="lead text-muted"> make changes to your personal informations </p>
      </div>
    </div>
  </section>


  <div id="registerform" class="container col col-6">
  <?php //echo var_dump($_POST) ?>
  <p  style="color: RED"><?php echo $UpdateSuccess ?></p>
    <form method="POST" >
        <div class="row">
            <div class="mb-3 col col-6">
                <label for="firstname" class="form-label">Vorname</label>                                 
                <input type="text" required class="form-control" id="firstname" aria-describedby="firstnameHelp" name="firstname" value="<?php echo $singleUser->firstname ?>" >
                <div id="firstnameHelp" class="form-text">Gib deinen Vornamen ein.</div>
            </div>
            <div class="mb-3 col col-6">
                <label for="lastname" class="form-label">Nachname</label>
                <input type="text" required class="form-control" id="lastname" aria-describedby="elastnameHelp" name=lastname value="<?php echo $singleUser->lastname ?>">
                <div id="lastnameHelp" class="form-text">Gib deinen Nachnamen ein.</div>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" name="username" value="<?php echo $singleUser->username ?>">
                <div id="usernameHelp" class="form-text">Welchen Username möchtest du haben?</div>
            </div>
            <div class="mb-3">
            <p  style="color: RED"><?php echo $emailFail ?></p>
                <label for="email" class="form-label">Email address</label>
                <input type="email" required class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?php echo $singleUser->mail ?>">
                <div id="emailHelp" class="form-text">Gib deine E-Mail Adresse an.</div>
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">Das bin Ich</label>
                <textarea class="form-control" type="text"  name="bio" id="bio" cols="50" rows="1"><?php echo $singleUser->bio ?>   </textarea>
                <div id="bioHelp" class="form-text">Erzähl' etwas über Dich.</div>
            </div>

            <p  style="color: RED"><?php echo $pwdFail ?></p>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" required class="form-control" id="password" name="password" aria-describedby="passwordHelp">
                <div id="passwordHelp" class="form-text">Gib deine Passwort an.</div>
            </div>
            <div class="mb-3">
                <label for="password_confirm" class="form-label">Password bestätigen</label>
                <input type="password" required class="form-control" id="password_confirm" name="password_confirm" aria-describedby="passwordHelp2">
                <div id="passwordHelp2" class="form-text">Gib deine Passwort erneut ein</div>
            </div>



        <button type="submit" class="btn btn-primary" name="submit" value="send" >Update</button>
        
    </form>
</div>
<br>
<br>
<br>
<br>

 



    
        
         

        

    
<?php require_once __DIR__ . "../../../../../mainsrc/Design/footer.php" ?>
