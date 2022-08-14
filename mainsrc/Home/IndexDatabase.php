<?php
namespace App\Home;

use App\App\AbstractMVC\AbstractDatabase;
use App\Home\MVC\IndexModel;
use PDO;


class IndexDatabase extends AbstractDatabase{

    function getTable()
    {
        return "articles";
    }

    function getModel()
    {
        return IndexModel::class;
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


}
