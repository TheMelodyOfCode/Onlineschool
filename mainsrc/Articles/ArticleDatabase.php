<?php
namespace App\Articles;

use App\App\AbstractMVC\AbstractDatabase;
use App\Articles\MVC\ArticleModel;
use PDO;


class ArticleDatabase extends AbstractDatabase{

    function getTable()
    {
        return "articles";
    }

    function getModel()
    {
        return ArticleModel::class;
    }
    
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

function updateArticle($textid,$textname,$textcontent,$page,){ 
    $table = $this->getTable();
    if (!empty($this->pdo)){

       $statement = $this->pdo->prepare("UPDATE $table SET textid = :textid, textname = :textname, textcontent = :textcontent, page = :page ");
       $statement->execute([
            'textid' => $textid,
            'textname' => $textname,
            'textcontent' => $textcontent,
            'page' => $page,
            
       ]);
       #Hier wird kein return benötigt, weil nichts ausgegeben werden muss
    }
}

function updateTextcontent($textid, $textcontent){ 
    $table = $this->getTable();
    if (!empty($this->pdo)){
                                        
       $statement = $this->pdo->prepare("UPDATE $table SET  textcontent = :textcontent WHERE `textid` = :textid " );
       $statement->execute([
            'textid' => $textid,
            'textcontent' => $textcontent,
       ]);
    }
}




}
