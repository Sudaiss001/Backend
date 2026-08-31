<?php

	const ENVIRONMENT = 'Test';//Test Live

	//DB Config
	const HOST = 'localhost';
	const USER = 'root';
	const PWORD = '';
	const DB = '';

	const DB_TABLE_USER = 'users';


	const WEBSITE_TITLE = '';


   const MAIL_SERVER_EMAIL = '';
   const MAIL_SERVER_PWORD = '';
	

	$req_method = $_SERVER['REQUEST_METHOD'];


	//url
   $server_name = ENVIRONMENT == 'Test' ? 'http://' : 'https://';
   $server_name .= $_SERVER['SERVER_NAME'];
   $uri = $_SERVER['REQUEST_URI'];
   $app_url = ( strlen( $uri ) > 1 ) ? "$server_name$uri" : "$server_name";
   
   //directory
   $root_dir = dirname( __DIR__ );
   $cur_dir = dirname( __FILE__ );

   $website_url = '';

 
?>