

<div class="mb-3">
            <label for="albumname-settings"
                   class="form-label">Albumname
            </label>
            <input type="text"
                   class="form-control"
                   id="albumname-settings"
                   name="albumname"
                   required
                   value="<?php echo $singleAlbum->albumname ?>"
                   placeholder="Wie soll dein Album heißen?">
        </div>
        <div class="mb-3">
            <label for="albumdescription-settings"
                   class="form-label">Die Beschreibung deines Albums
            </label>
            <textarea class="form-control"
                      name="albumdescription"
                      id="albumdescription-settings" rows="3"><?php echo $singleAlbum->albumdescription ?>
            </textarea>
        </div>



<!-- <script src="onlineschool/mainsrc/src/Jquery/jquery-3.6.0.js"></script>
<script src="onlineschool//mainsrc/Photoalbum/MVC/AjaxPhotoalbum/ajaxAlbumInfoSettings.js"></script> -->



