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

		 function addNew( array $dt ) 
		 {
			$sql = "INSERT INTO $this->table( uname, pword, email, first_name, middle_name, last_name, phone_no, gender, bank_id, bank_account ) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
			$res = $this->runQuery2( $sql, $dt );
			
			return $res ?? [];
		 }

		function login( array $dt ) 
		{
			$sql = "SELECT us.*, rl.title AS user_role FROM $this->table us INNER JOIN $this->table_role rl ON us.role_id = rl.id WHERE ( us.uname = ? OR us.email = ? )";
			$res = $this->fetchSingle( $sql, $dt );

			return $res ?? [];
		}
		
		function getByTokenLogin( array $dt ) 
		{
			$sql = "SELECT us.*, TRIM(
					CONCAT(
						COALESCE( us.first_name, '' ), ' ', 
						COALESCE( us.middle_name, '' ), ' ', 
						COALESCE( us.last_name, '' )
					) ) AS full_name, rl.title AS user_role FROM $this->table us INNER JOIN $this->table_role rl ON us.role_id = rl.id WHERE us.token_login = ?";
			$res = $this->fetchSingle( $sql, $dt );
			
			return $res ?? [];
		}

      function updateTokenLoginById( array $dt ) 
		{	
			$sql = "UPDATE $this->table SET token_login = ? WHERE id = ?";
			$res = $this->runQuery2( $sql, $dt );
			
			return $res ?? false;
		}

		function updateIsDeletedById( array $dt ) 
		{	
			$sql = "UPDATE $this->table SET is_deleted = ?, status = 'INACTIVE' WHERE id = ?";
			$res = $this->runQuery2( $sql, $dt );
			
			return $res ?? false;
		}

		function getAll( array $dt ) 
		{
         $sql = "SELECT us.*, TRIM(
					CONCAT(
						COALESCE( us.first_name, '' ), ' ', 
						COALESCE( us.middle_name, '' ), ' ', 
						COALESCE( us.last_name, '' )
					) ) AS full_name, us.uname as user_name, rl.title AS user_role FROM $this->table us INNER JOIN $this->table_role rl ON us.role_id = rl.id WHERE us.is_deleted = ? LIMIT ?";
			$res = $this->fetchMultiple( $sql, $dt );

			return $res ?? [];
		}

		function getByUname( array $dt ) 
		{
			$sql = "SELECT * FROM $this->table WHERE uname = ?";
			$res = $this->fetchSingle( $sql, $dt );
			
			return $res ?? [];
		}

		function getEmail( array $dt ) 
		{
			$sql = "SELECT * FROM $this->table WHERE email = ?";
			$res = $this->fetchSingle( $sql, $dt );
			
			return $res ?? [];
		}

		function getByEmail( array $dt ) 
		{
			$sql = "SELECT us.*, TRIM(
					CONCAT(
						COALESCE( us.first_name, '' ), ' ', 
						COALESCE( us.middle_name, '' ), ' ', 
						COALESCE( us.last_name, '' )
					) ) AS full_name, rl.title AS user_role FROM $this->table us INNER JOIN $this->table_role rl ON us.role_id = rl.id WHERE us.email = ?";
			$res = $this->fetchSingle( $sql, $dt );
			
			return $res ?? [];
		}

		function getById( array $dt ) 
		{
			$sql = "SELECT * FROM $this->table WHERE id = ?";
			$res = $this->fetchSingle( $sql, $dt );
			
			return $res ?? [];
		}

		function getByBankId( array $dt ) 
		{
			$sql = "SELECT * FROM $this->table WHERE bank_id = ?";
			$res = $this->fetchSingle( $sql, $dt );
			
			return $res ?? [];
		}

		function updateById( array $dt ) 
		{	
			$sql = "UPDATE $this->table SET uname = ?, pword = ?, email = ?, first_name = ?, middle_name = ?, last_name = ?,  phone_no = ?, gender = ?, bank_id = ?, bank_account = ? WHERE id = ?";
			$res = $this->runQuery2( $sql, $dt );
			
			return $res ?? false;
		}

		function getCount( array $dt )
	   {
			$sql = "SELECT COUNT( id ) AS total FROM $this->table";
			$res = $this->fetchSingle( $sql, $dt );

			return $res[ 'total' ] ?? 0;
		}

		function getCountByStatus( array $dt )
	   {
			$sql = "SELECT COUNT( id ) AS total FROM $this->table WHERE status = ?";
			$res = $this->fetchSingle( $sql, $dt );

			return $res[ 'total' ] ?? 0;
		}

      function getWithBankInByid( array $dt ) 
		{
			$sql = "SELECT us.*, TRIM(
					CONCAT(
						COALESCE( us.first_name, '' ), ' ', 
						COALESCE( us.middle_name, '' ), ' ', 
						COALESCE( us.last_name, '' )
					) ) AS full_name, us.uname as user_name, bk.sort_code FROM $this->table us INNER JOIN $this->table_bank bk ON us.bank_id = bk.id WHERE us.id = ?";
			$res = $this->fetchSingle( $sql, $dt );
			
			return $res ?? [];
		}

		function updateByEmail( array $dt ) 
		{	
			$sql = "UPDATE $this->table SET pword = ? WHERE email = ?";
			$res = $this->runQuery2( $sql, $dt );
			
			return $res ?? false;
		}

		function fetchNormalUsers() 
		{
			$sql = "SELECT * FROM $this->table WHERE role_id > 2";
			$res = $this->fetchMultiple( $sql );

			return $res ?? [];
		}

		function updateSendMonthlyMail( array $dt ) 
		{	
			$sql = "UPDATE $this->table SET send_monthly_mail = ? WHERE role_id > 2";
			$res = $this->runQuery2( $sql, $dt );
			
			return $res ?? false;
		}
		function fetchUsersByMailStatus( array $dt ) 
		{	
			$sql = "SELECT * FROM $this->table WHERE send_monthly_mail = ? AND role_id > 2 LIMIT ?";
			$res = $this->fetchMultiple( $sql, $dt );
			
			return $res ?? false;
		}


	}
?>