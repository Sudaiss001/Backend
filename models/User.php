<?php

	include_once( 'App.php' );
	include_once( 'Encryption.php' );

	class User
	{
		//using Namespaces
		use App {
      	App::__construct as private __appConst;
    	}

		use Encryption;

		protected $table = '';

		function __construct()
	 	{
	 		$this->__appConst();
	 		$this->table = DB_TABLE_USER;
	 	}

		
	}