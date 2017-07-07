<?php
/**
*
* @about project GitHub Webhooks, 
* Application responsible 
* for receiving posts from github webhooks, and automating 
* our production environment by deploying
* 
* @autor    @jeffotoni
* @date     25/04/2017
* @since  Version 0.1
*/

// 
// php -S localhost:9001 -t index.php
// 
// OR
// 
// php -S localhost:9001 -t test_index.php 
// 
// Apache .htaccess
// 
// OR
// 
// Ngnix
// 

require_once "../config/setenv.conf.php";

/** 
 * Various ways of instantiating objects
 *
 * Way one:
 * 
 * use web\src\Http\NewRouter;
 * $NewRouter = new NewRouter();
 *
 * Way two:
 *
 * $NewRouter = $api->NewRouter();
 */

//
// Class responsible for handling the responses
//

use web\src\Http\Response as Response;


//
// Class responsible for handling request 
//

use web\src\Http\Request as Request;

//
// Instantiating routes
//

$api->NewRouter()

	//
	//
	//

	->Methods("POST")

	//
	//
	//

	->HandleFunc(
		
		//
		// Defining your routes
		//

		'/fast', function (Response $response, Request $request) use ($api) {

		 
		 echo "\nfazer uma outra chamada aqui";

			   
		}
	)

	//
	// It will execute the methods
	//

	->Run();