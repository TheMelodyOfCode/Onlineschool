<?php

namespace App\Documents;

use App\App\AbstractMVC\AbstractDatabase;
use App\Documents\MVC\DocumentModel;
use PDO;

class DocumentDatabase extends AbstractDatabase {

    function getTable()
    {
        return "documents";
    }

    function getModel()
    {
        return DocumentModel::class;
    }


function getAllDocuments($userid){ 
        $table = $this->getTable();
        $model = $this->getModel();
    
        if (!empty($this->pdo)){
            $allDocuments = $this->pdo->prepare("SELECT * FROM $table WHERE `userid` = :userid ");
            $allDocuments->execute([
                'userid' => $userid
            ]);
            $allDocuments->setFetchMode(PDO::FETCH_CLASS, $model);
            $documentsDATA = $allDocuments->fetchAll(PDO::FETCH_CLASS);
            }
            return $documentsDATA;
    }
    
    
    /** Dadurch das hier prepare & ein Platzhalter verwendet wird kann die URL NICHT mehr gehackt werden */
    function getSingleDocument($documentid){ 
    
            $table = $this->getTable();
            $model = $this->getModel();
    
        if (!empty($this->pdo)){
            $singleDocument = $this->pdo->prepare("SELECT * FROM $table WHERE `documentid` = :documentid");
            # das Statement muss ausgeführt werden durch execute und dem platzhalter :userid die userid übergeben werden
            $singleDocument->execute([
                'documentid' => $documentid,
            ]);
            $singleDocument->setFetchMode(PDO::FETCH_CLASS, $model);
            $singleDATA = $singleDocument->fetch(PDO::FETCH_CLASS);
        }
        return $singleDATA;
    }
    
    
    function newDocument($documentname, $documentdescription, $userid){ 
    
        $table = $this->getTable();
        if (!empty($this->pdo)){
            #Hier ist wichtig das die Platzhalter in der richtigen Reihenfolge sind
            $statement = $this->pdo->prepare("INSERT INTO `$table`( `documentname`,`documentdescription`,`userid`) VALUES ( :documentname, :documentdescription, :userid)");
            $statement->execute([
                #Im Normalfall werden hier Variablen benutzt
                'documentname' => $documentname,
                'documentdescription' => $documentdescription,
                'userid' => $userid,
            ]);

        }
    }
    
    
    function deleteDocument($documentid){ 
    

        $table = $this->getTable();
        if (!empty($this->pdo)){
           $statement = $this->pdo->prepare("DELETE FROM $table WHERE documentid = :documentid");
           $statement->execute([
            'documentid' => $documentid
           ]);
        }
    }
    
    
    function updateDocumentInformation($documentname, $documentdescription, $documentid){ 
    
        $table = $this->getTable();
        if (!empty($this->pdo)){
           $statement = $this->pdo->prepare("UPDATE $table SET `documentname` = :documentname, `documentdescription` = :documentdescription  WHERE `documentid` = :documentid ");
           $statement->execute([
            'documentname' => $documentname,
            'documentdescription' => $documentdescription,
            'documentid' => $documentid
           ]);
           #Hier wird kein return benötigt, weil nichts ausgegeben werden muss
        }
    }
    
    function updateDocument($document, $documentid){ 
        $table = $this->getTable();
        if (!empty($this->pdo)){
           $statement = $this->pdo->prepare("UPDATE `$table` SET `document` = :document  WHERE `documentid` = :documentid ");
           $statement->execute([
            #Im Normalfall werden hier Variablen benutzt
            'document' => $document,
            'documentid' => $documentid
           ]);
           #Hier wird kein return benötigt, weil nichts ausgegeben werden muss
        }
    }


}