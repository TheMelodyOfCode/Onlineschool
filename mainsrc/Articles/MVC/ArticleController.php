<?php

namespace App\Articles\MVC;
use App\App\AbstractMVC\AbstractController;
use App\Articles\ArticleDatabase;

class ArticleController extends AbstractController{

    #Datenbankverbindung
    public function __construct(ArticleDatabase $articleDatabase){
        $this->articleDatabase = $articleDatabase;
    }

    public function home(){

        $aboutHeather = $this->articleDatabase->getSingleArticle(1);
        $onlineschool = $this->articleDatabase->getSingleArticle(2);
        $courses = $this->articleDatabase->getSingleArticle(3);

       $this->pageload("Articles", "home", [
        "aboutHeather" => $aboutHeather,
        "onlineschool" => $onlineschool,
        "courses" => $courses
       ]);
    }




}