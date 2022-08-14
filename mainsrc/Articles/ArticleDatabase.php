<?php

namespace App\Articles;

use App\App\AbstractMVC\AbstractDatabase;
use App\Articles\MVC\ArticleModel;
use PDO;

class ArticleDatabase extends AbstractDatabase {

    public function getTable() {
        return "articles";
    }

    public function getModel(){
        return ArticleModel::class;
    }


function getAllArticles(){ 

    $table = $this->getTable();
    $model = $this->getModel();

    if (!empty($this->pdo)){
        $allArticles = $this->pdo->prepare("SELECT * FROM $table");
        $allArticles->execute();
        $allArticles->setFetchMode(PDO::FETCH_CLASS, $model);
        $articleDATA = $allArticles->fetchAll(PDO::FETCH_CLASS);
        }
        return $articleDATA;
}


/** Dadurch das hier prepare & ein Platzhalter verwendet wird kann die URL NICHT mehr gehackt werden */
function getSingleArticle($textID){ 

        $table = $this->getTable();
        $model = $this->getModel();

    if (!empty($this->pdo)){
        $singleArticle = $this->pdo->prepare("SELECT * FROM $table WHERE `textid` = :textid");
        # das Statement muss ausgeführt werden durch execute und dem platzhalter :userid die userid übergeben werden
        $singleArticle->execute([
            'textid' => $textID
        ]);
        $singleArticle->setFetchMode(PDO::FETCH_CLASS, $model);
        $singleDATA = $singleArticle->fetch(PDO::FETCH_CLASS);
    }
    return $singleDATA;
}


function newArticle(){ 

    $table = $this->getTable();
    if (!empty($this->pdo)){
        #Hier ist wichtig das die Platzhalter in der richtigen Reihenfolge sind
        $statement = $this->pdo->prepare("INSERT INTO `$table`( `textname`,`textcontent`) VALUES ( :textname, :textcontent)");
        $statement->execute([
            #Im Normalfall werden hier Variablen benutzt
            'textname' => "blupbla",
            'textcontent' => "lirum larum bla bli blop",
        ]);
    }
}


function deletArticle($textname){ 

    $textname = "BlupBla";
    $table = $this->getTable();
    if (!empty($this->pdo)){
       $statement = $this->pdo->prepare("DELETE FROM $table WHERE textname = :textname");
       $statement->execute([
        'textname' => $textname
       ]);
    }
}


function updateArticle(){ 

    $table = $this->getTable();
    if (!empty($this->pdo)){
       $statement = $this->pdo->prepare("UPDATE $table SET password = :password WHERE `textid` = :textid ");
       $statement->execute([
        #Im Normalfall werden hier Variablen benutzt
        'textname' => "newNameText",
        'textid' => 5
       ]);
       #Hier wird kein return benötigt, weil nichts ausgegeben werden muss
    }
}



}