<?php

namespace App\Articles\MVC;

use App\App\AbstractMVC\AbstractModel;


/**
 * Durch das ArucleModel - und  das der fetch in der Articledatabase auf Objekt umgeschrieben wurde
 * $singleArticle->setFetchMode(PDO::FETCH_CLASS, ArticleModel::class);
 * $singleDATA = $singleArticle->fetch(PDO::FETCH_CLASS);
 * können wir die Objekt-Orientierte schreibweise benutzen und 
 * zusätzlich durch das Abstract Model die Array-schreibweise 
 * 
 * Die Variablen sind die Spalten der Tabelle in der Datenbank */    
class ArticleModel extends AbstractModel {

    public $textid;
    public $textname;
    public $textcontent;

    /**
     * Hier können nun auch funktionen definiert werden um die Variablen
     * bzw den Inhalt aus der Datenbank anders anzeigen lassen zu können zum Beispiel */
    public function getStrlen($value)
    {
        return ($value);
    }

}