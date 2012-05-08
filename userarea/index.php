<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<title>Change your user settings</title>
<link rel="stylesheet" href="../css/site.css" type="text/css" />
</head>

<body>
	<div id="container">
	
	<div id="bodyLayer">
		
		<?php
		
			$day = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
			$month = array('December', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October','November');
			print ($day[date('w')].' '.date('j').' ' .$month[date('n')].' ' .date('Y').' - '.date('g').':'.date('i').' '.date('A'));	
			echo "<br /> <br />";	
		
			echo '<h1>Profile Settings.</h1>';
		
			echo '<form id="profile" name="profile" method="post" action="">
			   <table width="248" border="0" align="center">
			  
				<tr>
					<td width="74">Username:</td>
					<td width="164"><input name="newname" type="text" ></td>
				</tr>
				<tr>
					<td>Real Name:</td>
					<td><input type="text" name="realname" ></td>
				</tr>
				<tr>
					<td>Email Address:</td>
					<td><input type="text" name="newemail" ></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="newpassword" ></td>
				</tr>
				<tr>
					<td>Clan:</td>
					<td><input type="text" name="clan" ></td>
				</tr>
				<tr>
					<td>Homepage:</td>
					<td><input type="text" name="homepage" value="http://"></td>
				</tr>
				<tr>
					<td>Favourite Game:</td>
					<td><input type="text" name="favgame" ></td>
				</tr>
				<tr>
					<td>Favourite Band:</td>
					<td><input type="text" name="favband" ></td>
				</tr>
				<tr>
					<td>Favourite Song:</td>
					<td><input type="text" name="favsong" ></td>
				</tr>
				<tr>
					<td>About Me:</td>
					<td><input type="text" name="aboutme" ></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" align="middle" value="Edit Profile"/></td>
				</tr>
				</table>
			</form>';
		?>
	</div>
</body>
</html>