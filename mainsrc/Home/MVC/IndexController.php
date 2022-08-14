<?php

namespace App\Home\MVC;
use App\App\AbstractMVC\AbstractController;
use App\Home\IndexDatabase;

class IndexController extends AbstractController{

    #Datenbankverbindung
    public function __construct(IndexDatabase $indexDatabase){
        $this->indexDatabase = $indexDatabase;
    }

    public function home(){

        $homeArticle = $this->indexDatabase->getSingleArticle(1);

       $this->pageload("Home", "home", [
        "homeArticle" => $homeArticle
       ]);
    }




}