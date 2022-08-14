<?php

namespace App\UserDashboard\MVC;

use App\App\AbstractMVC\AbstractController;

class UserDashboardController extends AbstractController {

    public function userDashboard(){

        /** Wenn im LoginAuth.php $_SESSION["login] true ist dann 
         * lade das Dashboard oder schmeiß den user zurück zur Login Seite.
         * Das Dashboard kann nur erreicht werden wenn man eingelogged ist.
         * HIER kann man dann auch weitere Seiten hinzufügen, die Nur über einen Login
         * erreichbar sein sollen. oder auch noch auf andere Sachen prüfen über die Session variable*/
        if ($_SESSION["login"]) {
            $this->pageload("UserDashboard", "userDashboard", [
            ]);
        } else {
            header("Location: /Login"); 
        }
        
    }
}