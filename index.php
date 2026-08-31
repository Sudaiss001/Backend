<?php 

   ob_start();
   
   if( session_status() == PHP_SESSION_NONE )
   {
      session_start();    
   }       
   
   //App functions
   include_once( 'config.php' );
   include_once( 'models/Utils.php' );
   //Creating App instances
   $utils = new Utils();

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
   $page = $utils->fixUrl( $page );

   //setting home as default
   if ( !$page ) 
   {
      $page = 'home';
   }
   
   //
   include_once( 'views/header.php' );
   

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
   
   include_once( 'views/footer.php' );
   ob_end_flush();
?>