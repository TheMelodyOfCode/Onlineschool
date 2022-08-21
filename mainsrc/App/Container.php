<?php
namespace App\App;

use App\Articles\ArticleDatabase;
use App\Articles\MVC\ArticleController;
use App\Home\MVC\IndexController;
use App\Home\IndexDatabase;
use App\Error\MVC\ErrorController;
use App\Connections\ConToMySQL;
use App\Teachers\MVC\TeacherController;
use App\Teachers\TeacherDatabase;
use App\Users\MVC\UserController;
use App\Users\Userdatabase;
use App\Register\MVC\RegisterController;
use App\PHPMailer\Exception;
use App\PHPMailer\PHPMailer;
use App\PHPMailer\SMTP;
use App\Login\MVC\LoginController;
use App\Login\MVC\LoginAuth;
use App\Logout\MVC\LogoutController;
use App\SecurityLogin\SecurityLoginDatabase;
use App\UserDashboard\MVC\UserDashboardController;
use App\Photoalbum\MVC\PhotoalbumController;
use App\Photoalbum\PhotoalbumDatabase;
use App\Documents\MVC\DocumentController;
use App\Documents\DocumentDatabase;



/** 
 *  Der Container instanziiert die Klassen und sorgt dafür das 
 *  wir die Datenbankverbindung bekommen .
 *  Quasi einen zentral instanziierung von benötigten Klassen die 
 *  dann nicht einzeln auf jeder Seite instanziiert werden müssen */
class Container {

   /** 
   * Um zu verhindern das nicht ein und dieselbe Instanz hundert mal neu
   * instanziiert wird haben wir hier das Array und prüfen unten bei
   * if (!empty($this->classInstances[$object]) ob schon eine existiert
   * wenn ja wird Sie geladen ansonsten wird Sie neu instanziiert */
    private $classInstances = [];

    # Array für die Baupläne
    private $builds = [];

    public function __construct()
    {
    /**
     * Hier werden quasi die Instanzen (Baupläne) vorgehalten die unten aufgerufen werden
     * unter $this->classInstances[$object] = $this->builds[$object]();
     * Wenn die Instanz noch nicht existiert */
        $this->builds = [
            'documentController' => function(){
                return new DocumentController($this->build("documentDatabase"));
            },    
            'documentDatabase' => function(){
                return new DocumentDatabase($this->build("pdo"));
            },

            'photoalbumController' => function(){
                return new PhotoalbumController($this->build("photoalbumDatabase"));
            },
            'photoalbumDatabase' => function(){
                return new PhotoalbumDatabase($this->build("pdo"));
            },
            'userDashboardController' => function(){
                return new UserDashboardController($this->build("userDatabase"));
            },
            'logoutController' => function(){
                return new LogoutController($this->build("securityLoginDatabase"));
            },
            'loginController' => function(){
                return new LoginController($this->build("loginAuth"));
            },
            'loginAuth' => function() {
                return new LoginAuth(
                $this->build("userDatabase"),
                $this->build("securityLoginDatabase"));
            },
            'securityLoginDatabase' => function(){
            return new SecurityLoginDatabase($this->build("pdo"));
            },

            'registerController' => function(){
            return new RegisterController(
                $this->build("userDatabase"),
                $this->build("exception"),
                $this->build("pHPMailer"),
                $this->build("sMTP"),
            );
            },
            'exception' => function(){
                return new Exception();
            },
            'pHPMailer' => function(){
                return new PHPMailer();
            },
            'sMTP' => function(){
                return new SMTP();
            },
            'errorController' => function(){
                return new ErrorController();
            },
            'indexController' => function(){
                return new IndexController($this->build('indexDatabase'));
            },
            'indexDatabase' => function(){
                return new IndexDatabase($this->build('pdo'));
            },
            /** weil wir im constructor des Routers den Container angeben
             *  muss hier der Container auch übergeben werden um zugriff zu haben */
            'router' => function(){
                return new Router($this->build('container'));
            },
            'container' => function(){
                return new Container();
            },
            'articleController' => function(){
                return new ArticleController($this->build("articleDatabase"));
            },
            'articleDatabase' => function(){
                return new ArticleDatabase($this->build('pdo'));
            },

            'teacherController' => function(){
                return new TeacherController($this->build("teacherDatabase"));
            },
            'teacherDatabase' => function(){
                return new TeacherDatabase($this->build('pdo'));
            },
            'userController' => function(){
                return new UserController($this->build("userDatabase"));
            },
            'userDatabase' => function(){
                return new UserDatabase($this->build('pdo'));
            },

            'pdo' => function (){
                $connection = new ConToMySQL();
                return $connection->conToMySQL1();
            }

        ];
    }

   /**
   * Den Inhalt der Variablen $object bekommen wir immer von dort wo diese
   * Funktion aufgerufen wird. 
   * Anstelle dort die Klasse zu Instanziieren geschiet das hier. */
    public function build($object){
        if (isset($this->builds[$object])){
            #check if instanz already exists/loaded
            if (!empty($this->classInstances[$object])){
                return $this->classInstances[$object];
            }
            $this->classInstances[$object] = $this->builds[$object]();
        }
        return $this->classInstances[$object];
    }
}