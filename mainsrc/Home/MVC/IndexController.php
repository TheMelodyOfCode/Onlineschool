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

        $aboutHeather = $this->indexDatabase->getSingleArticle(1);
        $onlineschool = $this->indexDatabase->getSingleArticle(2);
        $courses = $this->indexDatabase->getSingleArticle(3);

       $this->pageload("Home", "home", [
        "aboutHeather" => $aboutHeather,
        "onlineschool" => $onlineschool,
        "courses" => $courses
       ]);
    }




}