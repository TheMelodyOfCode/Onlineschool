

<?php foreach($allDocuments As $item) : ?>


    <div style="width: 200px; height: 330px" class="card ">
    <a href="onlineschool/mainsrc/UploadDocs/<?php  echo $item->document ?>"><?php  echo $item->documentname ?> <?php  echo $item->document ?></a>
        <img  src="onlineschool/mainsrc/UploadDocs/<?php  echo $item->document ?>" class="card-img-top" alt="...">
        
        <div class="card-body">
            <h5 class="card-title"><?php  echo html($item->documentname) ?></h5>
            <p class="card-text"><?php  echo html($item->documentdescription); ?></p>
            <!-- <a href="#" class="btn btn-success">Zu den Alben</a> -->
        </div>
        
        <div class="btn-group">
            <a href="#" class="btn btn-sm btn-outline-secondary">View</a>
            <a href="/Document=Settings?documentid=<?php  echo $item->documentid; ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
          <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
          <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
        </div>

    </div>
    <?php endforeach; ?>

    <form style="width: 225px;" method="Post" class="row" action="/LearningArea" id="newDocumentForm">
        <input type="hidden" name="documentname" value="new document">
        <input type="hidden" name="documentdescription" value="Ich bin ein neues Dokument">
        <input type="hidden" name="userid" value="<?php  echo $_SESSION['userid']; ?>">
        <button style="height: 330px;" type="submit" class="btn btn-success" name="newDocument" value="send">New Document </button>
    </form>
    

    <script src="onlineschool/mainsrc/LearningArea/MVC/AjaxDocment/AjaxNewDocument.js"></script>