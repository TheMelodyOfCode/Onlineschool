<?php

namespace App\App\AbstractMVC;
use PDO;

/** Vorher war die PDO in der Userdatabase eingebunden. Um aber die Anwendung
 * generisch zu halten haben wir hier die Abstractdatabase wo auch die tabelle
 * der Datenbank vorgehalten wird und in der Dattabase nur noch als Variable existiert.
 * Somit kann die Tabelle an einer Stelle geändert werden wenn nötig und alle anderen Anwendunge
 * funktionieren weiter. Das gleiche gilt für das UserModel.
 * 
 * Funktionen aus der UserDatabase können nun auch hierher ausgelagert werden und funktionieren immernoch.
 * Generell können hier Funktionen definiert werden die überall benötigt werden.
 */

# abstracteKlassen können nur weitergegeben werden und können nicht so aufgerufen werden.
abstract class AbstractDatabase {

    protected $pdo;
    # Durch PDO wird die Variable Klassenspezifisch zugewiesen
    # Und kann nicht anderweitig benutzt werden
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    abstract function getTable();
    abstract function getModel();

    function getUser($userid, $mail){
        $table = $this->getTable();
        $model = $this->getModel();
        if (!empty( $this->pdo)){
            $user =  $this->pdo->prepare("SELECT * FROM `$table` WHERE `userid` = :userid OR `mail` = :mail");
            $user->execute([
                'userid' => $userid,
                'mail' => $mail,
            ]);
            $user->setFetchMode(PDO::FETCH_CLASS, $model);
            $userdata = $user->fetch(PDO::FETCH_CLASS);
        }
        return $userdata;
    }

    function getUserByEmail($mail){
        $table = $this->getTable();
        $model = $this->getModel();
        if (!empty( $this->pdo)){
            $user =  $this->pdo->prepare("SELECT * FROM `$table` WHERE `mail` = :mail");
            $user->execute([
                'mail' => $mail
            ]);
            $user->setFetchMode(PDO::FETCH_CLASS, $model);
            $userdata = $user->fetch(PDO::FETCH_CLASS);
        }
        return $userdata;
    }

}