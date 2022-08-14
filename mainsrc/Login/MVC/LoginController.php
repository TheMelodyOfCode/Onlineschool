<?php

namespace App\Login\MVC;

use App\App\AbstractMVC\AbstractController;

class LoginController extends AbstractController {

    public function __construct(LoginAuth $loginAuth){
        $this->loginAuth = $loginAuth;
    }

    public function loginpage(){

        $error = null;
        if (!empty($_POST)){
            /** Die Variablen werden vom Login-Formular über $_Post übergeben */
            $mail = $_POST["mail"];
            $password = $_POST["password"];

            /** Hier wird geprüft ob die Checkbox gecheckt ist.
             * Sobald stayin in post gesetzt ist wird die funktion im LoginAuth aufgerufen und mail übergeben */
            if (!empty($_POST["stayin"])) {
                $this->loginAuth->buildstayin($mail);
            }
            $login = $this->loginAuth->checklogin($mail, $password);
            if ($login){
                header("Location: /Dashboard");
            } else {
                $error = "Der Login ist fehlgeschlagen";
            }
        }
        
        /** Für den Fall das keine Session Login existiert (user ausgelogget oder Session-cookie abgelaufen) 
         *  wird die Funktion checkstayin im LoginAuth aufgerufen */
        if (!isset($_SESSION["login"])){
            $this->loginAuth->checkStayin();
        }

        /** Durch diese If Abfrage kann die Login Seite nicht mehr erreicht werden
         * solange man eingelogged ist. man wird immer aufs Dashboard zurück geroutet.*/
        if (!empty($_SESSION["login"])){
            header("Location: /Dashboard");
        } else {
            $this->pageload("Login", "loginpage", [
                'error' => $error
            ]);
        }
    }
}
