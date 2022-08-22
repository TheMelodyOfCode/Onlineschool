<?php require_once __DIR__ . "../../../../../mainsrc/Design/header.php"; ?>


<br><br><br><br>
<div id="registerform" class="container col col-6">
    <h1>Sign Up</h1>
    <h3 style="color: RED"><?php  echo $regSuccess ?></h3>
    <p ><h3 style="color: RED"><?php // echo $fail ?></h3></p>
    <br>
    <?php  // var_dump($_POST) ?>
    <!-- Get ist standard und wird ausgeführt wenn man nichts angibt 
    Wichtig ist das POST verwendet wird-->
    <!-- TODO:add pricing option free ,basic , enterprise -->
    <form id="ajaxUpdateProfile" method="POST" >
        <div class="row">

            <div class="mb-3 col col-6">
                <label for="firstname" class="form-label">Vorname</label>                                 <!-- name ist derArray-Key -->
                <input type="text" required class="form-control" id="firstname" aria-describedby="firstnameHelp" name="firstname">
                <div id="firstnameHelp" class="form-text">Gib deinen Vornamen ein.</div>
            </div>
            <div class="mb-3 col col-6">
                <label for="lastname" class="form-label">Nachname</label>
                <input type="text" required class="form-control" id="lastname" aria-describedby="elastnameHelp" name=lastname>
                <div id="lastnameHelp" class="form-text">Gib deinen Nachnamen ein.</div>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" name="username">
                <div id="usernameHelp" class="form-text">Welchen Username möchtest du haben?</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" required class="form-control" id="email" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">Gib deine E-Mail Adresse an.</div>
                <span style="color: RED"><?php // echo $emailFail ?></span>
            </div>
            <div class="mb-3">
                <label for="bio" class="form-label">Das bin Ich</label>
                <textarea class="form-control" type="text"  name="bio" id="bio" cols="50" rows="1">   </textarea>
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

            <label for="membership" class="form-label my-2 text-danger ">Bitte wähle deinen Membership aus</label>
            <div class="form-check ml-3 col col-3">
              <input id="credit" name="membership" value="free" type="radio" class="ml-2 form-check-input" checked >
              <label class="form-check-label " for="credit">Free</label>
            </div>
            <div class="form-check mb-3 col col-3">
              <input id="debit" name="membership" value="pro" type="radio" class="form-check-input " >
              <label class="form-check-label" for="debit">Pro</label>
            </div>
            <div class="form-check col col-3">
              <input id="paypal" name="membership" value="enterprise" type="radio" class="form-check-input" >
              <input id="status" name="status" value="student" type="hidden" class="form-check-input" >
              <label class="form-check-label" for="paypal">Enterprise</label>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="submit" value="send" >Register</button>
        
    </form>
</div>
<br>
<br>
<br>
<br>
<br>


<?php require_once __DIR__ . "../../../../../mainsrc/Design/footer.php" ?>