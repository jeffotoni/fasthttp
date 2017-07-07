<?php
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

