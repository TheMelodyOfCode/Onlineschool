<?php

namespace App\Documents\MVC;

use App\App\AbstractMVC\AbstractController;
use App\Documents\DocumentDatabase;

class DocumentController extends AbstractController {

    public function __construct(DocumentDatabase $documentDatabase){
        $this->documentDatabase = $documentDatabase;
    }

    public function allDocuments(){

        $allDocuments = $this->documentDatabase->getAllDocuments($_SESSION["userid"]);

        if(!empty($_POST["newdocument"])) {
            $documentname = $_POST["documentname"];
            $documentdescription = $_POST["documentdescription"];
            $userid = $_POST["userid"];
            $this->documentDatabase->newDocument($documentname, $documentdescription, $userid);
        }
 
        /** Hier werden die 3 Parameter übergeben für die Funktion Pageload aus dem AbstractControler
         *  directory, page und das Array mit den variablen */
        $this->pageload("Documents", "allDocuments", [ 
            # AUF DIE GENAUE SCHREIBWEISE ACHTEN
            "allDocuments" => $allDocuments,
            ]);
    }

    public function ajaxNewDocumentFunction(){
        /** Die Funktion wird an Javascript übergeben und befüllt
         * dann die posts wieder darum wird auch ein !empty nicht benötigt*/
        $documentname = $_POST["documentname"];
        $documentdescription = $_POST["documentdescription"];
        $userid = $_POST["userid"];
        $this->documentDatabase->newDocument($documentname, $documentdescription, $userid);
    }


    public function ajaxPageDocument(){

        $allDocuments = $this->documentDatabase->getAllDocuments($_SESSION["userid"]);
        /** Es soll nur der Bereich der Album Seite geladen werden 
         * und nicht die ganze Seite! */
        $this->pageload("Documents", "ajaxPageDocument", [
            "allDocuments" => $allDocuments,
        ]);
    }

    public function documentsettings(){

        $userid = $_SESSION['userid'];
        $documentid = $_GET['documentid'];
        $singleDocument = $this->documentDatabase->getSingleDocument( $documentid);
        
        $error = null;
        // var_dump($_FILES);
        if (!empty($_FILES)){
            if ($_FILES["document"]["type"] == "application/pdf"){

                $upload_dir = __DIR__. "../../../../mainsrc/UploadDocs/";
                /** den uploadfilename könnte man benutzen um den User anzuzeigen
                 * zum Beispiel hier den hast du hochgeladen - wird jetzt hier noch nicht verwendet */
                $uploadfilename = basename($_FILES["document"]["name"]);
                /** Dadurch wird der filename aus der userid und documentid zusammengesetzt und ist dadurch immer 
                 * einzigartig und kann nicht zufällig überschrieben werden bei gleichem namen beim Documentupload */
                $date = date("d.m.Y");
                $newfilename = $date . ".pdf";
                $newfilename = $userid . $documentid . "_" . $date . ".pdf";
                
                if (move_uploaded_file($_FILES["document"]["tmp_name"], $upload_dir . $newfilename )) {
                    // $this->documentDatabase->updateDocument($newfilename, $documentid);
                    $this->documentDatabase->updateDocument($newfilename, $documentid);
                    $error = "Das Dokument wurde hochgeladen ";
                } else {
                    $error = "Es ist ein Fehler aufegtreten";
                }
            }  
            if ($_FILES["document"]["type"] == "application/doc" OR "application/docx"){

                $upload_dir = __DIR__. "../../../../mainsrc/UploadDocs/";
                /** den uploadfilename könnte man benutzen um den User anzuzeigen
                 * zum Beispiel hier den hast du hochgeladen - wird jetzt hier noch nicht verwendet */
                $uploadfilename = basename($_FILES["document"]["name"]);
                /** Dadurch wird der filename aus der userid und documentid zusammengesetzt und ist dadurch immer 
                 * einzigartig und kann nicht zufällig überschrieben werden bei gleichem namen beim Documentupload */
                $date = date("d.m.Y");
                $newfilename = $date . ".pdf";
                $newfilename = $userid . $documentid . "_" . $date . ".docx";
                
                if (move_uploaded_file($_FILES["document"]["tmp_name"], $upload_dir . $newfilename )) {
                    // $this->documentDatabase->updateDocument($newfilename, $documentid);
                    $this->documentDatabase->updateDocument($newfilename, $documentid);
                    $error = "Das Dokument wurde hochgeladen ";
                } else {
                    $error = "Es ist ein Fehler aufegtreten";
                }
            }  
            
            else {
                $error = "Du kannst nur den Datentyp pdf oder docx hochladen";
            }

        }

        $this->pageload("Documents", "documentsettings", [ 
            # AUF DIE GENAUE SCHREIBWEISE ACHTEN
            "singleDocument" => $singleDocument,
            "error" => $error,
            ]);
    }

    public function ajaxUpdateDocumentFunction(){

        $documentname = $_POST["documentname"];
        $documentdescription = $_POST["documentdescription"];
        $documentid = $_POST["documentid"];
        $this->documentDatabase->updateDocumentInformation($documentname, $documentdescription, $documentid);


    }

    public function ajaxDeleteDocumentFunction(){

        $documentid = $_GET["documentid"];
        $this->documentDatabase->deleteDocument($documentid);

    }

    public function ajaxDisplaySingleDocumentSettingsPage(){
        
        $userid = $_SESSION['userid'];
        $documentid = $_POST['documentid'];

        $singleDocument = $this->documentDatabase->getSingleDocument( $documentid);

        $this->pageload("Documents", "ajaxDocumentSettingsForm", [
            "singleDocument" => $singleDocument,
        ]);


    }





}