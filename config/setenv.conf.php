<?php
/**
*
* @about 	project GitHub Webhooks, 
* Application responsible 
* for receiving posts from github webhooks, and automating 
* our production environment by deploying
* 
* @autor 	@jeffotoni
* @date 	25/04/2017
* @since    Version 0.1
* 
*/

//
//
//
$PATH_CLEN = str_replace(array("public/",
                                "simulation/",
                                "config/", 
                                "templates/"), array(), getcwd() . "/");

//
//
//

define("PATHSET_LOCAL", $PATH_CLEN);

//
//
//

define("PATH_SETENV", PATHSET_LOCAL . "config/setenv.conf.php");

//
//
//

define("PATH_SETCONFIG", PATHSET_LOCAL . "config/setconfig.conf.php");

//
//
//
chdir(PATHSET_LOCAL);



//
//
//

if(!is_file(PATH_SETCONFIG)) {

$SETCONF_PHP = '<?php
/**
*
* @about    project GitHub Webhooks, 
* Application responsible 
* for receiving posts from github fasthttp, and automating 
* our production environment by deploying
* 
* @autor    @jeffotoni
* @date     07/07/2017
* @since    Version 0.1
* 
*/


//
//
//

define("ROOT_DIR", PATHSET_LOCAL);

//
//
//
chdir(ROOT_DIR);

//
//
//

define("SECRET", "12345");


//
//
//

define("KEY", "b118eda4656926d003f9b4af9c203994");


// 
// 
// 

define("PATH_CLASS", "web/src");


// 
// 
// 

define("PATH_CLASS_NAMESPACE", "web\src");
';

    //
    //
    //

    file_put_contents(PATH_SETCONFIG, $SETCONF_PHP . PHP_EOL);    
        
    //
    //
    //

    require_once PATH_SETCONFIG;

} else {


    //
    //
    //

    //echo "\n\nStart....\n\n";
    require_once PATH_SETCONFIG;
}



// 
// 
// 

$apifunc2 = function ($namespace) {
    
    //
    //
    //

    $path_n = str_replace(array("\\"), array("/"), $namespace);

    //
    //
    //
    
    $path_n = ROOT_DIR.$path_n . ".php";


    if(is_file($path_n)) {

        //
        //
        //

        include_once $path_n;

        // 
        // 
        // 

        $classApi = new $namespace;

        //
        //
        //

        return $classApi;

    } else {

        exit("\nFile not exist! [{$path_n}]");

    }
};

//
//
//

$api = $apifunc2(PATH_CLASS_NAMESPACE. "\AutoLoading");



// 
// 
// 

$loader = function ($namespace, $class="") {

//
//
//

$path_n = str_replace(array("\\"), array("/"), $namespace);

//
//
//

$path_n = ROOT_DIR.$path_n . ".php";


if(is_file($path_n)) {

    //
    //
    //

    include_once $path_n;

    // 
    // 
    // 
    if($class) {


        $classApi = new $class;

    } else {

        $classApi = new $namespace;
    }

    //
    //
    //

    return $classApi;

} else {

    exit("\nFile not exist! [{$path_n}]");

  }
};


//
//
//

$LoaderAuto = $loader(PATH_CLASS . "/ClassAutoLoading", "ClassAutoLoading");
