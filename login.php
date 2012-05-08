
<?php
	session_start();
	// need an if statement to see if user clicked register and then that form below will be shown. ok.
	//$_GET['new_account'] = false;
	if ($authed == true) {
	
		echo "Mate you are already logged in. Logout to login again d'oh!";
	}	
	else {
		echo '<div id="login" align="center">
		  	<form name="loginForm" method="post" action="includes/logged.php">	
			<table width="259" border="0" align="center">
				  <tr>
					<td><label>Username</label></td>
					<td><input name="username" type="text" id="username"></input></td>
				  </tr>
				  <tr>	
					<td><label>Password</label></td>
					<td><input name="password" type="password" id="password"></input></td>
				  </tr>
				  <tr>
					<td><input type="submit" name="Submit" value="Submit"></input></td>
				    <td><a href="index.php?page=login&amp;=create">Create a new account</a></td>
				  </tr>
				</table>
		    </form>

		  </div>';

		if ($_GET['new'] == create) {
			echo '<!--<div id="signup"> -->
					<h1>Create an account</h1>
					<form name="form1" method="post" action="includes/newuser.php">
					<table width="259" border="0" align="center">
					  <tr>
						<td><label>Username</label></td>
						<td><input name="username" type="text" id="username"></input></td>
					  </tr>
					  <tr>
						<td><label>Password</label></td>
						<td><input name="pword" type="password" id="pword"></input></td>
					  </tr>
					  <tr>
						<td><label>Email Address</label></td>
						<td><input name="email" type="text" id="email"></input></td>
					  </tr>
					  <tr>
						<td><label>Real Name</label></td>
						<td><input type="text" name="realname"></input></td>
					  </tr>
					  <tr>
						<td><label>Home page</label></td>
						<td><input name="homepage" type="text" id="homepage" value="http://"></input></td>
					  </tr>
					  <tr>
						<td><input type="submit" name="Submit" value="Submit"></input></td>
					  </tr>
					</table>
					</form>
				</div>';

		}
	}
?>