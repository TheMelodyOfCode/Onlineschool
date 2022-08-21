<?php

namespace App\Login\MVC;

use App\SecurityLogin\SecurityLoginDatabase;
use App\Users\UserDatabase;

class LoginAuth {

    /** Hierdurch haben wir Zugriff auf die  SecurityLogindatabase & Userdatabase die uns Methoden bereitstellt
     * um Einträge in der Datenbank zu bearbeiten, löschen, speichern oder abzurufen.*/
    public function __construct(UserDatabase $userDatabase, SecurityLoginDatabase $securityLoginDatabase )
    {
        $this->userDatabase = $userDatabase;
        $this->securityLoginDatabase = $securityLoginDatabase;
    }

    /** Hier werden der Indetifier und der Securitytoken für die Angemeldet bleiben geschichte
    * definiert. Die Zeit ist bei beiden gleich aber die random nummer unterscheidet sich. 
    * zusätzlich wird der return type auf string gesetzt und kann dadurch nix anderes sein*/
    function setIdentifier():string
    {
        return bin2hex(time() . random_bytes(8));
    }

    function setSecurityToken():string
    {
        return bin2hex(time() . random_bytes(10));
    }

    /** dadurch das im container $this->build("securityLoginDatabase") unter LoginAuth instanziiert wurde
     * haben wir hier zugriff darauf; */
    # $mail wird durch den Aufruf der Funktion im LoginController übergeben
    public function buildstayin($mail) {
        $identifier = $this->setIdentifier();
        $securitytoken = $this->setSecurityToken();
        $user = $this->userDatabase->getUser("", $mail);
        /**Hier wird die userid mit dem Identifier und token an die Funktion newstayin übergeben und in die Datenabank gespeichert*/
        $this->securityLoginDatabase->newStayin($user->userid, $identifier, password_hash($securitytoken, PASSWORD_DEFAULT));
        setcookie("identifier", $identifier, time() + (3600*24*365)); # 1 jahr gültig
        setcookie("securitytoken", $securitytoken, time() + (3600*24*365)); # 1 jahr gültig
    }


    /** Diese Funktion wird im LoginController in der Funktion loginpage aufgerufen wenn keine Session["login] gesetzt wurde
     *  und prüft ob ein cookie mit Identifier existiert und ein cookie mit securitytoken,
     *  wenn dem so ist wird die session regeneriert und Login auf true gesetzt.
     *  dadurch ist $_SESSION["login"] gesetzt und man ist weiter eingelogged und wird aufs Dashboard gerotet. */
    public function checkStayin(){
        if (isset($_COOKIE["identifier"])){
            if (isset($_COOKIE["securitytoken"])){
               $stayindata = $this->securityLoginDatabase->getStayinData($_COOKIE["identifier"]);
               if (!password_verify($_COOKIE["securitytoken"], $stayindata->securitytoken)){
                   die("Autologin nicht möglich, bitte einloggen");
               }else {

                   session_regenerate_id(true);
                   $newSecurityToken = $this->setSecurityToken();
                   $_SESSION["userid"] = $stayindata->userid;
                   # Die Funktion aus der SecurityLoginDatabase ändert/updated dasSecurityToken bei jedem logout/etc
                   $this->securityLoginDatabase->updateSecurityToken(password_hash($newSecurityToken, PASSWORD_DEFAULT), $stayindata->userid);
                   # nach dem update des SecurityTokens muss das cookie neu gesetzt werden
                   setcookie("securitytoken", $newSecurityToken, time() + (3600*24*365));
                    /** styindata hat die userid aus der $_Session geholt und wird hier als Parameter benutzt
                     * um die informationen aus der Funktion getUser aus der AbstractDatabase geholt - mail bleibt leer */
                   $userdata = $this->userDatabase->getUser($stayindata->userid, "");
                   $_SESSION["username"] = $userdata->username;
                   $_SESSION["login"] = true;
               }
            }
        }
    }

    /** @todo check here auf pricing option to route the user accordingly */

    public function checklogin($mail, $password){
        #userid bleibt als leerer string und nur mail wird übergeben
       $user = $this->userDatabase->getUser("", $mail);
       if ($user){ // check of mail for user
           if (password_verify($password, $user->password)){
            /**An dieser Stelle, durch return true ist klar das der User sich eingelogged hat
             * und sich verifiziert, darum macht es sinn die Session hier zu setzen */
                $user = $this->userDatabase->getUser("", $mail );
                /** Durch session_regenerate_id(true) wird die Session ID bei jedem neu laden der Seite neu generiert
                 * Das verhindert Sessionfixierung */
                session_regenerate_id(true); 
                $_SESSION["userid"] = $user->userid;
                $_SESSION["username"] = $user->username;
                $_SESSION["membership"] = $user->membership;
                $_SESSION["login"] = true;
               return true; 
           } else {
               return false; // pw false
           }
       }
       return false; // false if user doesn't exist
    }
}

    