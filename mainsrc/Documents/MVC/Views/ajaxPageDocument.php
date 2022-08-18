

<?php foreach($allDocuments As $item) : ?>



    <div style="width: 200px; height: 220px" class="card ">

    <h5 class="pb-2 border-bottom">
        <?php  echo html($item->documentname) ?>
    </h5>
    
        <div class="card-body border-bottom"">
            <p class="card-text">
                <?php  echo html($item->documentdescription); ?></p>
        </div>
        <p >

             <a href="onlineschool/mainsrc/UploadDocs/<?php  echo $item->document ?>"><?php  echo $item->document ?></a>

    </p>
        
        <div class=" py-1 btn-group">
                 
            <!-- <a href="onlineschool/mainsrc/UploadDocs/<?php //  echo $item->document ?>" class="btn btn-sm btn-outline-secondary">View</a> -->

        <a href="/Document=Settings?documentid=<?php  echo $item->documentid; ?>" class="btn btn-sm btn-outline-secondary">Edit</a>

  <!--  TODO: delete file from folder on server -->
        <a id="deleteDocument" href="/Document-Delete?documentid=<?php echo $item->documentid; ?>" class="btn btn-sm btn-outline-secondary ">Delete</a>

        </div>

    </div>


    <?php endforeach; ?>


    <form style="width: 225px;" method="Post" class="row" action="/Documents" id="newDocumentForm">
        <input type="hidden" name="documentname" value="new document">
        <input type="hidden" name="documentdescription" value="Ich bin ein neues Dokument">
        <input type="hidden" name="userid" value="<?php  echo $_SESSION['userid']; ?>">
        <button style="height: 220px;" type="submit" class="btn btn-success" name="newDocument" value="send">New Document Cover </button>
    </form>


    <script src="onlineschool/mainsrc/Documents/MVC/AjaxDocument/AjaxDeleteBUTTON.js"></script>
    <script src="onlineschool/mainsrc/Documents/MVC/AjaxDocment/AjaxNewDocument.js"></script>
