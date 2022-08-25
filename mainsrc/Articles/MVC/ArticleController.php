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

    public function proLearning(){

        $proGreeting = $this->articleDatabase->getSingleArticle(5);
        $proSection1 = $this->articleDatabase->getSingleArticle(6);
        $proSection2 = $this->articleDatabase->getSingleArticle(7);
        $proSection3 = $this->articleDatabase->getSingleArticle(8);
  

    if ($_SESSION["login"]) {
        $this->pageload("Articles", "learningAreaPro", [
            "proGreeting" => $proGreeting,
            "proSection1" => $proSection1,
            "proSection2" => $proSection2,
            "proSection3" => $proSection3,
        ]);
    }  else {
        header("Location: /Login"); 
            }
    }



    public function updateFreelearning(){

        $greeting = $this->articleDatabase->getSingleArticle(4);     

        if (!empty($_POST)){  
            $welcomeTxt = $_POST["welcomeTxt"];
            $textid = 4;
                $this->articleDatabase->updateTextcontent($textid, $welcomeTxt);
                header("Location: /Freelearning"); 
        }
        if ($_SESSION["login"]) {
            $this->pageload("Articles", "updatefreearea", [ 
                "greeting" => $greeting,
                    ]);
            }   else {
                header("Location: /Login"); 
        }

    }

    public function updateProlearning(){

        $proGreeting = $this->articleDatabase->getSingleArticle(5);
        $proSection1 = $this->articleDatabase->getSingleArticle(6);
        $proSection2 = $this->articleDatabase->getSingleArticle(7);
        $proSection3 = $this->articleDatabase->getSingleArticle(8);    

        if (!empty($_POST)){  

            $textcontent = $_POST["proSection"];
            $textid = $_POST["textid"];
 
                $this->articleDatabase->updateTextcontent($textid, $textcontent);
                header("Location: /Prolearning"); 
        }
        if ($_SESSION["login"]) {
            $this->pageload("Articles", "updateproarea", [ 
                "proGreeting" => $proGreeting,
                "proSection1" => $proSection1,
                "proSection2" => $proSection2,
                "proSection3" => $proSection3,
                    ]);
            }   else {
                header("Location: /Login"); 
        }

    }






}