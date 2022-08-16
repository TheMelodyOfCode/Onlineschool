<?php
/** Die Index.php ist der Hauptausgangspunkt unserer Website.
 * Darum wird die Session mit der super globalen $_Session hier egstartet
 * So das wir von überall darauf zugriff haben. */
session_start();
require_once "init.php";
// var_dump($_SESSION);
// var_dump($_COOKIE);
// var_dump(session_id());
// session_destroy();


    /** Hier instanziiert der Container uns den Router 
     * so das wir zugriff auf dessen Funktionen haben */
    $router = $container->build("router");

    /** Path_info erhalten wir immer dann wenn wir keinen
     *  Parameter übergeben haben , so wie bei der Startseite
     *  wenn also path_info gesetzt ist speichern wir dies und 
     *  ansonsten wenn wenn request_uri gestzt ist wird das gespeichert*/
    if (isset($_SERVER["PATH_INFO"])) {
        $request = $_SERVER["PATH_INFO"];
    } else {
        $request = $_SERVER["REQUEST_URI"];
    }


    if ($request == "/onlineschool/"){
        $router->add("indexController", "home");
    }
    
    /** Hier wird immer der Controller übergeben und die enthaltene Funktion 
     * die genausso benannt ist wie die webpage im views */
    #-----------------------------------------------------
    # Login, Register & Logout 
    elseif ($request == "/Register"){
        $router->add("registerController", "register");
    }
    elseif ($request == "/Login"){
        $router->add("loginController", "loginpage");
    }
    elseif ($request == "/Logout"){
        $router->add("logoutController", "logout");
    }
    #-----------------------------------------------------
    #Users
    elseif ($request == "/Users" ){
        $router->add("userController","getAllUsers");
    }
    elseif ($request == "/Users=user"){
        $router->add("userController", "userprofile");
    }   
    elseif ($request == "/Users/userlink") {
        $router->add("userController", "userprofile");
    } 
    #-----------------------------------------------------
    #Teachers
    elseif ($request == "/Teachers/teachers") {
        $router->add("teacherController", "teacherProfile");
    } 
    #-----------------------------------------------------
    #Articles
    elseif ($request == "/Articles/about"){
        $router->add("articleController", "about");
    }
    elseif ($request == "/Articles/products"){
        $router->add("articleController", "products");
    }
    #-----------------------------------------------------
    # User Dashboard nach Login
    elseif ($request == "/Dashboard"){
        $router->add("userDashboardController", "userDashboard");
    }
    #-----------------------------------------------------
    # Photoalbum Dashboard nach Login
    elseif ($request == "/Photoalbum"){
        $router->add("photoalbumController", "allAlbum");
    }
    elseif ($request == "/Album=Settings"){
        $router->add("photoalbumController", "albumsettings");
    }
    #-----------------------------------------------------

    # Photoalbum AJAX
    /** Diese Route wird im Browser NICHT geladen! Diese Route ist nur für AJAX!
     * AJAX greift auf die Route zu und führtdann den Code aus. */
    elseif ($request == "/Album-newAlbum"){
        # erst die Funktion
        $router->add("photoalbumController", "ajaxNewAlbumFunction");
        # dann der View
        $router->add("photoalbumController", "ajaxPagePhotoAlbum");
    } 
    elseif ($request == "/Album-Update"){
        # erst die Funktion
        $router->add("photoalbumController", "ajaxUpdateAlbumFunktion");
        # dann der View
        $router->add("photoalbumController", "ajaxDisplaySingleAlbumSettingsPage");
    } 
    #-----------------------------------------------------
    # LearningArea Dashboard nach Login
    elseif ($request == "/LearningArea"){
        $router->add("learningAreaController", "allDocuments");
    }
    elseif ($request == "/Document=Settings"){
        $router->add("learningAreaController", "documentsettings");
    }

    #-----------------------------------------------------

    # LearningArea AJAX
    /** Diese Route wird im Browser NICHT geladen! Diese Route ist nur für AJAX!
     * AJAX greift auf die Route zu und führtdann den Code aus. */
    elseif ($request == "/Document-newDocument"){
        # erst die Funktion
        $router->add("learningAreaController", "ajaxNewDocumentFunction");
        # dann der View
        $router->add("learningAreaController", "ajaxPageDocument");
    } 
    elseif ($request == "/Document-Update"){
        # erst die Funktion
        $router->add("learningAreaController", "ajaxUpdateDocumentFunktion");
        # dann der View
        $router->add("learningAreaController", "ajaxDisplaySingleDocumentSettingsPage");
    } 
    #-----------------------------------------------------
    #Error-Page
     else {
        $router->add("errorController", "errorpage");
    }

 
    // var_dump($_SERVER);
    // var_dump($request);
    ?>


