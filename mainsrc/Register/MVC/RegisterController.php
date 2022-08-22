<?php

namespace App\Register\MVC;

use App\App\AbstractMVC\AbstractController;
use App\Users\UserDatabase;
use App\PHPMailer\Exception;
use App\PHPMailer\PHPMailer;
use App\PHPMailer\SMTP;

class RegisterController extends AbstractController{

    public function __construct(UserDatabase $userDatabase, Exception $exception, PHPMailer $pHPMailer, SMTP $sMTP){
        $this->userDatabase = $userDatabase;
        $this->Exception = $exception;
        $this->PHPMailer = $pHPMailer;
        $this->SMTP = $sMTP;
    }


    #lädt register.php und verarbeitet die eingegeben Formulardaten
    public function register(){
        //var_dump($_POST);
        
    /*  not needed since there is a required field
        $fail = null;
        $emailFail = null; */
        $regSuccess = null;

        $pwdFail = null;

        if (!empty($_POST)){
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $password_confirm = $_POST["password_confirm"];
            $membership =  $_POST["membership"];
            $bio = $_POST["bio"];
            $status = $_POST["status"];
            $submit = $_POST["submit"];


            // Validate password strength
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);

            
            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8 || $_POST["password"] !== $_POST["password_confirm"] ) {
                $password = "";
                $pwdFail = 'Password should match and be at least 8 characters in length and should include at least one upper case letter, one number, and one special character. SORRY DUDE!';
            }
            
            // var_dump($_POST["email"]);

            else {
                $user = $this->userDatabase->getUserByEmail($email);
                if (empty($user)){

                    $password_hash = password_hash($password, PASSWORD_DEFAULT);
                    #speichert den user ein
                    $this->userDatabase->newUser($firstname,$lastname,$username,$email,$password_hash, $membership, $bio, $status);
                    #Grundeinstellungen zum Email versenden nach der Registrierung
                    // $this->PHPMailer->isSMTP();
                    // $this->PHPMailer->Host = "smtp.NAMEOFEmailPROVIDER.com";
                    // $this->PHPMailer->SMTPAuth = "true";
                    // $this->PHPMailer->SMTPSecure = "tls";
                    // $this->PHPMailer->Port = "587";
                    // $this->PHPMailer->Username = "deine@EMAILADRESSE.com";
                    // $this->PHPMailer->password = "DeinPassword";
                    // #Einstellungen für die Email
                    // $this->PHPMailer->isHTML(true); // hierdurch können html tags in der email benutzt werden
                    // $this->PHPMailer->Subject = "Herzlich Willkommen $username";
                    // $this->PHPMailer->From = "deine@EMAILADRESSE.com";
                    // /** dadurch das hier der name angegeben wird , ist die chance höher das die Email nicht im SPam landet
                    //  * Die Sicherheitseinstufung für die Email von google ist dann höher*/
                    // $this->PHPMailer->setFrom("deine@EMAILADRESSE.com", "Die Email kommt von NameOrganisationoderso");
                    // $this->PHPMailer->addReplyTo("deine@EMAILADRESSE.com", "Die Email kommt von NameOrganisationoderso");
                    // $this->PHPMailer->Body = "Herzlich Willkommen bei uns $username";

                    // #Adresse(n) wo die Email hingehen soll
                    // $this->PHPMailer->addAdress($email, $username);

                    // if ($this->PHPMailer->send()) {
                    //     $fail = "Die Email wurde versendet";
                    // } else {
                    //     $fail = "Die Mail konnte nicht gesendet werden" . $this->PHPMailer->ErrorInfo;
                    // }

                    $regSuccess = " Du hast Dich erfolgreich registriert";
                    
                } else {
                    $emailFail = "Ein Account mit dieser Email existiert schon!";
                }
            }
        }

        /* MD5 DARF NICHT MEHR VERWENDET WERDEN !!!! NICHT SICHER !!!  
        md5("PasswordIstTomate"); 
        Der hash ist immer gleich */

        // RICHTIG !!!!
        // var_dump(password_hash("Tomate", PASSWORD_DEFAULT));
        // var_dump(password_verify("Tomate", '$2y$10$AlEZJYjo6twcsnrd3hfWZuvpMHuVKEiGiX4zUgXwCPnTdCSYU5lkS'));

        $this->pageload("Register", "register", [
            // 'fail' => $fail,
            // 'emailFail' => $emailFail,
            'regSuccess' => $regSuccess,
            'pwdFail' => $pwdFail,
        ]);
    }
}