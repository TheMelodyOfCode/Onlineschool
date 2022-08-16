

<div class="mb-3">
            <label for="documentname-settings"
                   class="form-label">Documentname
            </label>
            <input type="text"
                   class="form-control"
                   id=documentname-settings"
                   name=documentname"
                   required
                   value="<?php echo $singleDocument->documentname ?>"
                   placeholder="Wie soll dein Dokument heißen?">
        </div>
        <div class="mb-3">
            <label for="documentdescription-settings"
                   class="form-label">Die Beschreibung deines Dokuments
            </label>
            <textarea class="form-control"
                      name=documentdescription"
                      id=documentdescription-settings" rows="3"><?php echo $singleDocument->documentdescription ?>
            </textarea>
        </div>



<!-- <script src="onlineschool/mainsrc/src/Jquery/jquery-3.6.0.js"></script>
<script src="onlineschool//mainsrc/Photoalbum/MVC/AjaxPhotoalbum/ajaxAlbumInfoSettings.js"></script> -->



