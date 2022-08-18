<?php require_once __DIR__ . "../../../../../mainsrc/Design/userheader.php"; ?>

<?php // echo var_dump($_POST); ?>


<section class="mt-4 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="alert alert-warning text-center">Settings for Documents: <?php echo $singleDocument->documentname?></h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
      </div>
    </div>
  </section>


  <section class="  container">
            <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
            <?php //echo var_dump($_POST["documentname"]) ?>
            <div class="container">
                <a href="/Documents"><button class="btn btn-secondary">Zurück</button></a>
            </div>
            <br>

            <div class="container ">
                <form method="post" id="DocumentSettingsAjax">

                    <div id="reloadDocumentSettingsForm">
                    <?php require_once __DIR__ . "../../../../../mainsrc/Documents/MVC/Views/ajaxDocumentSettingsForm.php" ?>
                    </div>
                    
                    <input type="hidden" name="documentid" value="<?php echo $_GET['documentid'] ?>">
                    <button type="submit" class="btn btn-secondary" name="send" value="send">Speichern</button>
                </form>
            </div>

            <br>
            <div class="container">
                <form method="post" id="document-form" enctype="multipart/form-data">
                    <label for="document-settings" class="form-label">Document</label>
                    <input type="hidden" name="documentid" value="<?php echo $_GET['documentid'] ?>">
                    <input class="form-control" name="document" id="document-settings" type="file" accept="application/*">
                    <button class="btn btn-secondary" type="submit" name="save" value="send">Speichern</button>
                </form>
                <p><?php echo $error ?></p>
            </div>
            <!-- <a id="deleteDocument" href="/Document-Delete?documentid=<?php echo $_GET['documentid'] ?>" class="btn btn-sm btn-outline-secondary ">Delete</a> -->
    </div>
    </div>
  </section>


<script src="onlineschool/mainsrc/src/Jquery/jquery-3.6.0.js"></script>
<script src="onlineschool/mainsrc/Documents/MVC/AjaxDocument/ajaxDocumentInfoSettings.js"></script>
<script src="onlineschool/mainsrc/Documents/MVC/AjaxDocument/AjaxDeleteBUTTON.js"></script>
<?php require_once __DIR__ . "../../../../../mainsrc/Design/footer.php" ?>


