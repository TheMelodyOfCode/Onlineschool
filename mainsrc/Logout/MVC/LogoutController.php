<?php

namespace App\Logout\MVC;

use App\App\AbstractMVC\AbstractController;
use App\SecurityLogin\SecurityLoginDatabase;

class LogoutController extends AbstractController {

    public function __construct(SecurityLoginDatabase $securityLoginDatabase){
        $this->securityLoginDatabase = $securityLoginDatabase;
    }

    public function logout(){
        #Dadurch wird die Session-login gelöscht
        unset($_SESSION["login"]);
        #Löscht die Einträge nach dem Logout aus der Datenbank 
        $this->securityLoginDatabase->deleteStayindata($_SESSION["userid"]);
        #Ablaufzeit wird durch -3600 auf Vergangenheit gesetzt und somit gelöscht
        setcookie("identifier","", time() - 3600);
        setcookie("securitytoken","", time() - 3600);

        $this->pageload("Logout", "logout" ,[

        ]);
    }
}
