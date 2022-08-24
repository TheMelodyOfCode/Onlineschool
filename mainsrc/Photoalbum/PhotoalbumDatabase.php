<?php

namespace App\Photoalbum;

use App\App\AbstractMVC\AbstractDatabase;
use App\Photoalbum\MVC\PhotoalbumModel;
use PDO;

class PhotoalbumDatabase extends AbstractDatabase {

    function getTable()
    {
        return "photoalbum";
    }

    function getModel()
    {
        return PhotoalbumModel::class;
    }


function getAllAlbums(){ 
        $table = $this->getTable();
        $model = $this->getModel();
    
        if (!empty($this->pdo)){
            $allAlbums = $this->pdo->prepare("SELECT * FROM $table");
            $allAlbums->execute();
            $allAlbums->setFetchMode(PDO::FETCH_CLASS, $model);
            $albumDATA = $allAlbums->fetchAll(PDO::FETCH_CLASS);
            }
            return $albumDATA;
    }

function getAlbumByUserID($userid){ 
        $table = $this->getTable();
        $model = $this->getModel();
    
        if (!empty($this->pdo)){
            $allAlbum = $this->pdo->prepare("SELECT * FROM $table WHERE `userid` = :userid ");
            $allAlbum->execute([
                'userid' => $userid
            ]);
            $allAlbum->setFetchMode(PDO::FETCH_CLASS, $model);
            $albumDATA = $allAlbum->fetchAll(PDO::FETCH_CLASS);
            }
            return $albumDATA;
    }
    
    
    /** Dadurch das hier prepare & ein Platzhalter verwendet wird kann die URL NICHT mehr gehackt werden */
    function getSingleAlbum($albumid){ 
    
            $table = $this->getTable();
            $model = $this->getModel();
    
        if (!empty($this->pdo)){
            $singleAlbum = $this->pdo->prepare("SELECT * FROM $table WHERE `albumid` = :albumid");
            # das Statement muss ausgeführt werden durch execute und dem platzhalter :userid die userid übergeben werden
            $singleAlbum->execute([
                'albumid' => $albumid,
            ]);
            $singleAlbum->setFetchMode(PDO::FETCH_CLASS, $model);
            $singleDATA = $singleAlbum->fetch(PDO::FETCH_CLASS);
        }
        return $singleDATA;
    }
    
    
    function newAlbum($albumname, $albumdescription, $userid){ 
    
        $table = $this->getTable();
        if (!empty($this->pdo)){
            #Hier ist wichtig das die Platzhalter in der richtigen Reihenfolge sind
            $statement = $this->pdo->prepare("INSERT INTO `$table`( `albumname`,`albumdescription`,`userid`) VALUES ( :albumname, :albumdescription, :userid)");
            $statement->execute([
                #Im Normalfall werden hier Variablen benutzt
                'albumname' => $albumname,
                'albumdescription' => $albumdescription,
                'userid' => $userid,
            ]);
        }
    }
    
    
    function deletAlbum($albumname){ 
    
        // $albumname = "BlupBla";
        $table = $this->getTable();
        if (!empty($this->pdo)){
           $statement = $this->pdo->prepare("DELETE FROM $table WHERE albumname = :albumname");
           $statement->execute([
            'albumname' => $albumname
           ]);
        }
    }
    
    
    function updateAlbumInformation($albumname, $albumdescription, $albumid){ 
    
        $table = $this->getTable();
        if (!empty($this->pdo)){
           $statement = $this->pdo->prepare("UPDATE $table SET `albumname` = :albumname, `albumdescription` = :albumdescription  WHERE `albumid` = :albumid ");
           $statement->execute([
            'albumname' => $albumname,
            'albumdescription' => $albumdescription,
            'albumid' => $albumid
           ]);
           #Hier wird kein return benötigt, weil nichts ausgegeben werden muss
        }
    }
    
    function updateAlbumCover($albumcover, $albumid){ 
        $table = $this->getTable();
        if (!empty($this->pdo)){
           $statement = $this->pdo->prepare("UPDATE `$table` SET `albumcover` = :albumcover  WHERE `albumid` = :albumid ");
           $statement->execute([
            #Im Normalfall werden hier Variablen benutzt
            'albumcover' => $albumcover,
            'albumid' => $albumid
           ]);
           #Hier wird kein return benötigt, weil nichts ausgegeben werden muss
        }
    }


}