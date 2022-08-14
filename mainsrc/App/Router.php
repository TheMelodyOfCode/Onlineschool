<?php
namespace App\App;


/** Die Klasse Router ist dafür zuständig das egal welcher view benötigt wird 
 * dieser aufgerufen werden kann um dann extra Dateien wie vorher userprofile.php überflüssig zu machen */
class Router {

    public function __construct(Container $container){
        $this->container = $container;
    }

        /** Die Variable $controller wird aus der Index befüllt und gibt uns
         * den instanziierten Container der uns den jeweilligen Controller erstellt.
         * und die jeweilige Funktion übergibt */
    public function add($controller, $function){
        $container = $this->container->build($controller);
        $view = $function;
        $this->getMeUsers($container, $view);
    }

    public function getMeUsers($container, $view){
                # weil hier die Funktion übergeben wird bekommt die Variable Klammern()
                $container->$view();
    }



}