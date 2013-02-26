<?php
	$DealerUser = $_SESSION['DealerUser'];

	$ip=$_SERVER['REMOTE_ADDR'];

	function getTime($connector) {
		$connector = new DbConnector();
		if (!$connector) {
			die('Could not connect');
		}
	date_default_timezone_set('America/Chicago');
	$date = date('m/d/Y h:i:s a', time());
	mysql_close();
	}

	function ae_detect_ie(){
	    if (isset($_SERVER['HTTP_USER_AGENT']) && 
	    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
		return true;
	    else
		return false;
	}

	function error_handler($errno, $error, $file, $line, $context) {
		//Email me if there is an error
		$to = "ClassifiedRideWebsite@gmail.com";
		$subject = "Error";
		$message = "Error # " . $errno . " - " . $error . " / " . $file . "Line # " . $line . " / " . $context;
		$from = "error@ClassifiedRide.com/Admin";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);
		//printf("The error handler got the error! The error says %s", $error);
		return true;
	} 
	
	function displayDealerLogin($connector){
		$connector = new DbConnector();
		echo "<form id='loginForm' name='loginForm' method='post' action=''>
			Dealer Username:<input name='DealerUName' type='text' class='textfield' id='DealerUName' size='15'/>
			Password:<input name='DealerPassword' type='password' class='textfield' id='DealerPassword' size='10' />
			<input name='submit' type='submit' class='Button' id='submit' value='Login' />
		</form><a href='/ResetDealerPass.php'>Reset Password</a>";
	}

	function displayDealerLogout($connector){
		$connector = new DbConnector();
		echo "<form action='/logoutDealer.php' onSubmit='alert('You are now logged out');' name='logout' id='logout'><input type='submit' value='Log Out' id='logout' name='logout' class='Button' /></form>";
	}

	function loginDealer($connector) {	
	$connector = new DbConnector();	
	session_start();
	if (($_POST['submit'])) {
		require_once 'Functions/dbConnector2.php';
		$sql="SELECT DealerID FROM dealers WHERE DealerUserName=:username AND DealerPassword=:password";

		$stmt=$db_conn->prepare($sql);

		$pass = hash( 'sha256', $_POST['DealerPassword']);
		$stmt->bindParam(":username",$_POST['DealerUName']);
		$stmt->bindParam(":password",$pass);
	
		$stmt->execute();
		
		if ($result = $stmt->fetch(PDO::FETCH_OBJ)) {
			$DealerUserName = $_POST['DealerUName'];
			$_SESSION['DealerUser']=$DealerUserName;
			$DealerUser = $_SESSION['DealerUser'];
			echo $DealerUser . " you are logged in";
			displayDealerLogout($connector);

			//Update Database with User's IP address and timestamp
			$ip=$_SERVER['REMOTE_ADDR'];
			$setIP = mysql_query("
				UPDATE dealers 
				SET LastLoginLocation='".$ip."'
				WHERE DealerUserName='".$DealerUser."'");

			//Update Database with TimeStamp of last login
			$setLoginTime = mysql_query("
				UPDATE dealers
				SET LastLogin='".$date."'
				WHERE DealerUserName='".$DealerUser."'");
		}
		else {
			echo "Invalid Credentials.  Try Again.";
			displayDealerLogin($connector);
		}
	}
	else if (!isset($_SESSION[DealerUser])) {
		displayDealerLogin($connector);
	}
	else {
		echo $_SESSION['DealerUser'] . " you are logged in";
		displayDealerLogout($connector);
		
	}	
}
?>
