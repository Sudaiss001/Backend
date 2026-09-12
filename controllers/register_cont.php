<?php
	$msg = '';
	// App functions
	include_once( 'models/User.php' );
	// Creating instances
	$user = new User();

	// Button logic
	if ( isset( $_POST['register_btn'] ) )
	{

		// Getting user inputs
		$first_name = strtoupper( $_POST['first_name'] );
		$last_name = strtoupper( $_POST['last_name'] );
		$full_name = "$first_name $middle_name $last_name";
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$amount = $_POST['amount'];
		$age = $_POST['age'];
		$enc_pword = $app->encPword( $pword );

		// Validating inputs
		if ( $first_name && $last_name && $gender && $email && $phone_no && $enc_pword )
		{
			$email_exist = $app->getByEmail( [ $email ] );

			// Collect data into array respectively to db fields
			$dt_01 = [ $first_name, $middle_name, $last_name, $enc_pword, $gender, $email, $phone_no ];

			if ( !$email_exist )
			{
			  // Add User
	        $res_01 = $app->addNew( $dt_01 );
            if($res_01)
               {
                  $msg = $web_app->showAlertMsg( 'success', 'User Registration Successful!' );
               }
               else {
                  $msg = $web_app->showAlertMsg( 'danger', 'Sorry, User Registration Failed!' );
               }
	     
	     	}
	     	else
	     	{
	     		$msg = $web_app->showAlertMsg( 'danger', 'Sorry, Email Already Exist!' );
	     	}
		}
		else 
		{
			$msg = $web_app->showAlertMsg( 'info', 'Please, Enter Required Data' );
		}
	}
	
	//Register interface
	include_once( 'views/register.php' );

 ?>
