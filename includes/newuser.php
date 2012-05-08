<?php
	
	include_once('../Connections/srwc.php');
	
	$_POST['username'];
	$_POST['email'];
	$_POST['pword'];
	$_POST['realname'];
	$_POST['homepage'];
	$userlevel = user;
	
	if (ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $email)){
			
		if (isset($_POST[username]) && isset($_POST[email]) && isset($_POST[pword])) {
			$srwc;
			mysql_select_db('pfrgwbtg_e107') or die('Unable to select the database.');	
	
			$result = mysql_query("SELECT * FROM srwc_site_users WHERE username='$username'"); 
			if (!$result)
				echo 'Could not execute query';
			if (mysql_num_rows($result)>0){
				echo 'That username is taken - go back and choose another one.';
				exit;
			}
				 
			$result = mysql_query("INSERT INTO srwc_site_users ( userlevel , username , email ,  password , realname , homepage ) VALUES ( '$userlevel' , '$username' , '$email' ,  password('$pword') , '$realname' , '$homepage' )"); // take away $result 
			mysql_close();
			echo "$username $realname $pword <p /> <a href=\"../index.php\">Click here to go back Home</a>";
		}
	} else {
		echo "Invalid email address, go back and try again.";
	  }
?>