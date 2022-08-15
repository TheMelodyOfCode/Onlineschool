<?php

namespace App\App\AbstractMVC;

class AbstractController {


    /** Dadurch das die Ordnerstruktur gleich gehalten wird, können wir hier eine 
     *  generische Funktion bauen die es uns erlaubt Anwendungscode und Darstellungscode zu trennen,
     * denn durch diese funktion sind die Variablen auf der jew. Page vorhanden und können benutzt werden */
    public function pageload($dir, $view, $variablen) {

        # extract holt alle variablen raus die gebraucht werden
        # dadurch müssen diese nicht extra einzeln angegeben werden
        extract($variablen);
        
        require_once __DIR__ .  "/../../$dir/MVC/Views/$view.php";
    }

}