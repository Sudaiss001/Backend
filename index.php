<?php 

   ob_start();
   
   if( session_status() == PHP_SESSION_NONE )
   {
      session_start();    
   }       
   
   //App functions
   include_once( 'config.php' );
   include_once( 'models/WebApp.php' );
   //Creating App instances
   $web_app = new WebApp();

   //url
   $server_name = 'http://' . $_SERVER['SERVER_NAME'];
   $uri = $_SERVER['REQUEST_URI'];
   $main_url = $server_name;
   $app_url = "$server_name$uri/";

   //page name logic
   $uri_arr = explode( '/', $uri );
   $uri_len =  count( $uri_arr );
   $page_starts = $uri_len - 1;
   $page = $uri_arr[ $page_starts ];

   $page_arr = explode( '?', $uri_arr[ $page_starts ] );
   $page = $page_arr[0];
   $page = $web_app->fixUrl( $page );

   //setting home as default
   if ( !$page ) 
   {
      $page = 'home';
   }
   
   //

   //directory
   $root_dir = dirname( __DIR__ );
   $cur_dir = dirname( __FILE__ );

   $page_x = $page . '_cont.php';
   $file = "$cur_dir/controllers/$page_x";

   //checking and including file
   if ( is_file( $file ) ) 
   {
      include_once( $file );
   }
   else
   {
      header( "Location: $main_url", true, 301 );
      exit();
   }

   // 
   
   ob_end_flush();
?>