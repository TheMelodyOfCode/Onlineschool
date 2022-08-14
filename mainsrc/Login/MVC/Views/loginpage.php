<?php  require_once __DIR__ . "../../../../../mainsrc/Design/header.php"; ?>

<br><br><br><br><br>
<div id="registerform" class="container col col-6">
    <h1>Login! -  to be back home!</h1>
    <br>
    <form method="post">
        <div class="row">
            <div class="mb-3">
                <label for="email"
                       class="form-label">Email address
                </label>
                <input type="email"
                       class="form-control"
                       id="mail" 
                       aria-describedby="emailHelp"
                       name="mail" required>
                <div id="emailHelp"
                     class="form-text">Gib deine E-Mail Adresse an.
                </div>
            </div>
            <div class="mb-3">
                <label for="password"
                       class="form-label">Password
                </label>
                <input type="password"
                       class="form-control"
                       id="password"
                       name="password"
                       aria-describedby="passwordHelp" required >
                <div id="passwordHelp"
                     class="form-text">Gib deine Passwort an.
                </div>
            </div>
        </div>
        <div class="checkbox mb-3">
            <input type="checkbox" value="checked" id="stayin" name="stayin">
            <label class="form-check-label" for="stayin" >Lass mich eingelogged </label>
        </div>
        <button type="submit"
                class="btn btn-primary"
                name="submit"
                value="send">Submit
        </button>
        <p style="color: red"><?php echo $error ?></p>
    </form>
</div>
<br><br><br>
<?php require_once __DIR__ . "../../../../../mainsrc/Design/footer.php" ?>