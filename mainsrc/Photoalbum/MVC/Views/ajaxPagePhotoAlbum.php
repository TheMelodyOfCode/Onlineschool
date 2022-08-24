

<?php foreach($allAlbum As $item) : ?>


    <div style="max-width: 300px; max-height: 600px" class="card my-2">
        <img style="max-width: 300px; max-height: 200px" src="onlineschool/mainsrc/UploadPhotos/<?php  echo $item->albumcover ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php  echo html($item->albumname) ?></h5>
            <p class="card-text"><?php  echo html($item->albumdescription); ?></p>
            <!-- <a href="#" class="btn btn-success">Zu den Alben</a> -->
        </div>
        
        <div class="btn-group">
            <a href="onlineschool/mainsrc/UploadPhotos/<?php  echo $item->albumcover ?>" class="btn btn-sm btn-outline-secondary">View</a>
            <a href="/Album=Settings?albumid=<?php  echo $item->albumid; ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
        <!--  TODO: delete file from folder on server -->
        <a id="deletePhoto" href="/Photo-Delete?albumid=<?php echo $item->albumid; ?>" class="btn btn-sm btn-outline-secondary ">Delete</a>
        </div>

    </div>
    <?php endforeach; ?>

    <form style="width: 225px;" method="Post" class="row" action="/Photoalbum" id="newAlbumForm">
        <input type="hidden" name="albumname" value="Neues Album">
        <input type="hidden" name="albumdescription" value="Ich bin ein neues Album">
        <input type="hidden" name="userid" value="<?php  echo $_SESSION['userid']; ?>">
        <button style="height: 330px;" type="submit" class="btn btn-success" name="newalbum" value="send">New Album </button>
    </form>
    

    <script src="onlineschool/mainsrc/Photoalbum/MVC/AjaxPhotoalbum/AjaxNewAlbum.js"></script>