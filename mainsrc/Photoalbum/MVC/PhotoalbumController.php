<?php

namespace App\Photoalbum\MVC;

use App\App\AbstractMVC\AbstractController;
use App\Photoalbum\PhotoalbumDatabase;

class PhotoalbumController extends AbstractController {

    public function __construct(PhotoalbumDatabase $photoalbumDatabase){
        $this->PhotoalbumDatabase = $photoalbumDatabase;
    }

    public function allAlbum(){

        $allAlbum = $this->PhotoalbumDatabase->getAllAlbum($_SESSION["userid"]);

        if(!empty($_POST["newalbum"])) {
            $albumname = $_POST["albumname"];
            $albumdescription = $_POST["albumdescription"];
            $userid = $_POST["userid"];
            $this->PhotoalbumDatabase->newAlbum($albumname, $albumdescription, $userid);
        }
        if ($_SESSION["login"]) {
        /** Hier werden die 3 Parameter übergeben für die Funktion Pageload aus dem AbstractControler
         *  directory, page und das Array mit den variablen */
        $this->pageload("Photoalbum", "allalbum", [ 
            # AUF DIE GENAUE SCHREIBWEISE ACHTEN
            "allAlbum" => $allAlbum,
            ]);
        }   else {
            header("Location: /Login"); 
        }

    }

    public function ajaxNewAlbumFunction(){
        /** Die Funktion wird an Javascript übergeben und befüllt
         * dann die posts wieder darum wird auch ein !empty nicht benötigt*/
        $albumname = $_POST["albumname"];
        $albumdescription = $_POST["albumdescription"];
        $userid = $_POST["userid"];
        $this->PhotoalbumDatabase->newAlbum($albumname, $albumdescription, $userid);
    }

    public function ajaxPagePhotoAlbum(){

        $allAlbum = $this->PhotoalbumDatabase->getAllAlbum($_SESSION["userid"]);
        /** Es soll nur der Bereich der Album Seite geladen werden 
         * und nicht die ganze Seite! */
        $this->pageload("Photoalbum", "ajaxPagePhotoAlbum", [
            "allAlbum" => $allAlbum,
        ]);
    }

    public function albumsettings(){

        $userid = $_SESSION['userid'];
        $albumid = $_GET['albumid'];
        $singleAlbum = $this->PhotoalbumDatabase->getSingleAlbum( $albumid);
        $error = null;
        // var_dump($_FILES);
        if (!empty($_FILES)){
            if ($_FILES["albumcover"]["type"] == "image/jpeg" OR "image/png"){

                $upload_dir = __DIR__. "../../../../mainsrc/UploadPhotos/";
                /** den uploadfilename könnte man benutzen um den User anzuzeigen
                 * zum Beispiel hier den hast du hochgeladen - wird jetzt hier noch nicht verwendet */
                $uploadfilename = basename($_FILES["albumcover"]["name"]);
                /** Dadurch wird der filename aus der useridund albumid zusammengesetzt und ist dadurch immer 
                 * einzigartig und kann nicht zufällig überschrieben werden bei gleichem name beim Bildupload */
                $newfilename = $userid . $albumid . ".png";
    
                if (move_uploaded_file($_FILES["albumcover"]["tmp_name"], $upload_dir . $newfilename )) {
                    $this->PhotoalbumDatabase->updateAlbumCover($newfilename, $albumid);
                    $error = "Der File wurde hochgeladen ";
                } else {
                    $error = "Es ist ein Fehler aufegtreten";
                }
            }  else {
                $error = "Du kannst nur den Datentyp jpg oder png hochladen";
            }

        }
        if ($_SESSION["login"]) {
            $this->pageload("Photoalbum", "albumsettings", [ 
                # AUF DIE GENAUE SCHREIBWEISE ACHTEN
                "singleAlbum" => $singleAlbum,
                "error" => $error,
                ]);
            }   else {
                header("Location: /Login"); 
            }

    }

    public function ajaxUpdateAlbumFunktion(){

        $albumname = $_POST["albumname"];
        $albumdescription = $_POST["albumdescription"];
        $albumid = $_POST["albumid"];
        $this->PhotoalbumDatabase->updateAlbumInformation($albumname, $albumdescription, $albumid);


    }

    public function ajaxDisplaySingleAlbumSettingsPage(){
        
        $userid = $_SESSION['userid'];
        $albumid = $_POST['albumid'];

        $singleAlbum = $this->PhotoalbumDatabase->getSingleAlbum( $albumid);
        $this->pageload("Photoalbum", "ajaxAlbumSettingsForm", [
            "singleAlbum" => $singleAlbum,
        ]);


    }





}