<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="refresh" content="3; url=../index.php" />
<title>RIDERS OF THE NIGHT CLAN SITE</title>
<link rel="stylesheet" href="../css/site.css" type="text/css" />
<body>
<div id="container">
	<?php
		//session_start();
		require_once('../Connections/srwc.php');
		$_POST['username'];
		$_POST['password'];
		
		//$_SESSION['$auth'] = false; // Assume user is not authenticated
		
		if (isset($_POST[username] ) && isset($_POST[password])) {
			
			$srwc;
			mysql_select_db( 'pfrgwbtg_e107' ) or die ( 'Unable to select database.' );
				
			$sql = "SELECT * FROM srwc_site_users WHERE username = '$username' AND password = password('$password')";
			
			$result = mysql_query( $sql ) or die ( 'Unable to execute query.' );
			$num = mysql_num_rows( $result );
			
			$row = mysql_fetch_array($result);
			
		if ( $num == 1 ){ //mysql_num_rows( $result ) > 0
			$_SESSION['authed'] = true;
			$_SESSION['valid_user'] = $username;
			$_SESSION['userlevel'] = $row['userlevel'];
			$_SESSION['sid'] = session_id();
			mysql_close();
			echo '<div align="center">';
			echo 'Welcome <b>' .$_SESSION['valid_user'] .'</b>, you are logged in. <a href="logout.php">Logout</a><p></p>';
			echo 'Page will automaically forward you, if not click <a href="../index.php">here</a><p></p>';
			echo $sid;
			if(isset($_COOKIE['lastVisit']))
				$visit = $_COOKIE['lastVisit']; 
			else
				echo "You've got some stale cookies!";
				echo "Your last visit was - ". $visit;
			echo '<div>';
		} else {
			echo "Login failed, try again.";
		  }
		
		}
	?>
</div>
</body>
</head>
</html>