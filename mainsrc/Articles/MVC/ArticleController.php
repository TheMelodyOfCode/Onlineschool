<?php

namespace App\Articles\MVC;

use App\App\AbstractMVC\AbstractController;
use App\Articles\ArticleDatabase;


class ArticleController extends AbstractController {


    public function __construct(ArticleDatabase $articleDatabase){
        $this->ArticleDatabase = $articleDatabase;
    }

    public function about(){

        $about = $this->ArticleDatabase->getSingleArticle(2);
 
        /** Hier werden die 3 Parameter übergeben für die Funktion Pageload aus dem AbstractControler
         *  directory, page und das Array mit den variablen */
        $this->pageload("Articles", "about", [ 
            # AUF DIE GENAUE SCHREIBWEISE ACHTEN
            "about" => $about,
            ]);
    }

    public function products(){

        $products = $this->ArticleDatabase->getSingleArticle(3);
 
        /** Hier werden die 3 Parameter übergeben für die Funktion Pageload aus dem AbstractControler
         *  directory, page und das Array mit den variablen */
        $this->pageload("Articles", "products", [ 
            # AUF DIE GENAUE SCHREIBWEISE ACHTEN
            "products" => $products,
            ]);
    }

 
     }



