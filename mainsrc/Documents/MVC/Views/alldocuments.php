<?php require_once __DIR__ . "../../../../../mainsrc/Design/userheader.php"; ?>
<?php // echo $album1->albumdescription; ?>


<section class="mt-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <!-- TODO: change session to variable with render -->
      <h1 class="fw-light">Your Documents <?php echo $_SESSION["username"] ?></h1>
        <p class="lead text-muted">Here you can create a new Dokument or update your document Title and description</p>
      </div>
    </div>
  </section>


    <!-- <div style="text-align: left;" class="container"> -->
    <!-- Um einen Button oder a link anstelle einer Form zu benutzen  könne wir mit
         Daten Attributen arbeiten. Wichtig ist das die datenAttribute genauso benannt werden 
        wie in der PHP Funktion -->
        <!-- <button class="btn btn-success newAlbumAjaxButton"
        data-albumname = "New Album" 
        data-albumdescription = "Ich bin ein neues Album" 
        data-userid="<?php //  echo $_SESSION["userid"] ?>" >New Album</button>
   </div> -->


  
    <div class="container ">

        <!-- Durch die Funktion .done in AjaxNewDocument wird dieser Bereich neu geladen 
            und nicht die ganze Seite des Browsers was zur Folge hatte das , das Submit event nicht da war
            bzw dann doppelt ausgelöst hat. DARUM ist auch wichtig das der Pfad 
            zu der Javascript Datei AjaxNewDocument.js noch extra in der ajaxPageDocument.php eingebunden wird
            damit diese immer mit läd wenn NUR der Bereich neu läd !!!  -->
            <!-- Zusätzlich - da nur der bereich geladen wird -- wird man auch nicht an den Anfang (oben) 
            der seite zurück geführt nach erstellung eines neuen Documents, was nervig wäre wenn man viele Alben hätte -->
        <div id="reloadDocument" class=" container row">
        <?php require_once __DIR__ . "../../../../../mainsrc/Documents/MVC/Views/ajaxPageDocument.php" ?>
        
        </div>
        </div>
<br>



<script src="onlineschool/mainsrc/src/Jquery/jquery-3.6.0.js"></script>
<script src="onlineschool/mainsrc/Documents/MVC/AjaxDocument/AjaxNewDocument.js"></script>
<!-- <script src="onlineschool/mainsrc/Documents/MVC/AjaxDocument/AjaxDeleteBUTTON.js"></script> -->
<!-- <script src="onlineschool/mainsrc/Documents/MVC/AjaxDocument/AjaxNewDocumentBUTTON.js"></script> -->

<?php // require_once __DIR__ . "../../../../../mainsrc/Design/footer.php" ?>


