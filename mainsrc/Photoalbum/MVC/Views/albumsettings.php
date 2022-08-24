<?php require_once __DIR__ . "../../../../../mainsrc/Design/teacherheader.php"; ?>

<?php // echo var_dump($_POST); ?>


<section class="mt-4 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="alert alert-warning text-center">Settings for Album: <?php echo $singleAlbum->albumname?></h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
      </div>
    </div>
  </section>


  <section class="  container">
            <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">

            <div class="container">
                <a href="/Photoalbum"><button class="btn btn-secondary">Zurück</button></a>
            </div>
            <br>

            <div class="container ">
                <form method="post" id="AlbumSettingsAjax">
                    <div id="reloadAlbumSettingsForm">
                    <?php require_once __DIR__ . "../../../../../mainsrc/Photoalbum/MVC/Views/ajaxAlbumSettingsForm.php" ?>
                    </div>
                    <input type="hidden" name="albumid" value="<?php echo $_GET['albumid'] ?>">
                    <button type="submit" class="btn btn-secondary" name="send" value="send">Speichern</button>
                </form>
            </div>

            <br>
            <div class="container">
                <form method="post" id="albumcover-form" enctype="multipart/form-data">
                    <label for="albumcover-settings" class="form-label">Albumcover</label>
                    <input type="hidden" name="albumid" value="<?php echo $_GET['albumid'] ?>">
                    <input class="form-control" name="albumcover" id="albumcover-settings" type="file" accept="image/*">
                    <br>
                    <button class="btn btn-secondary" type="submit" name="save" value="send">Speichern</button>
                </form>
                <p><?php echo $error ?></p>
            </div>
    </div>
    </div>
  </section>


<script src="onlineschool/mainsrc/src/Jquery/jquery-3.6.0.js"></script>
<script src="onlineschool//mainsrc/Photoalbum/MVC/AjaxPhotoalbum/ajaxAlbumInfoSettings.js"></script>
<?php require_once __DIR__ . "../../../../../mainsrc/Design/footer.php" ?>


