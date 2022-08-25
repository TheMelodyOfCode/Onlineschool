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

    public function freeLearning(){

        $greeting = $this->articleDatabase->getSingleArticle(4);

    if ($_SESSION["login"]) {
        $this->pageload("Articles", "freelearning", [
            "greeting" => $greeting,
        ]);
    }  else {
        header("Location: /Login"); 
            }
    }


    public function updateFreelearning(){

        $updateSuccess = null;
        $greeting = $this->articleDatabase->getSingleArticle(4);     

        if (!empty($_POST)){
            
            $welcomeTxt = $_POST["welcomeTxt"];
            $textid = 4;
                $this->articleDatabase->updateTextcontent($textid, $welcomeTxt);
                $updateSuccess = 'You did it ! - everything is up to date';
                header("Location: /Freelearning"); 
    }

    if ($_SESSION["login"]) {
        $this->pageload("Articles", "updatefreearea", [ 
            "greeting" => $greeting,
            "updateSuccess" => $updateSuccess,

            ]);
    }   else {
        header("Location: /Login"); 
    }



    }






}