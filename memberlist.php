<?php

	session_start();
	require_once('Connections/srwc.php');
	
	if ($authed == true) {
		$srwc;
		
		mysql_select_db('pfrgwbtg_e107') or die(mysql_error());
		
		$memberlist = mysql_query("SELECT * FROM srwc_site_users WHERE uid > 0 ORDER BY uid ASC") or die(mysql_error());
		
		while($result = mysql_fetch_array($memberlist)){
			//echo 'uid: ' .$result['uid'] .' : ';
			echo '<div align="left">';
			echo 'Username: '; ?>
			<a href="index.php?page=memberlist&amp;u=<?php echo $result['username'] .'">' .$result['username'] .'</a><br />';
			if ($_GET['u'] == $result['username']){
				echo '<table width="300">';
				echo "<tr><td bgcolor=\"#996699\">Real Name : </td><td bgcolor=\"#996699\">" .$result['realname'] ."</td></tr>";
				echo "<tr><td bgcolor=\"#999966\">Homepage : </td><td bgcolor=\"#999966\">" .$result['homepage'] ."</td></tr>";
				echo "<tr><td bgcolor =\"#996699\">Favourite Game : </td><td bgcolor=\"#996699\">" .$result['favgame'] ."</td></tr>";
				echo "<tr><td bgcolor=\"#999966\">Favourite Band : </td><td bgcolor=\"#999966\">" .$result['favband'] ."</td></tr>";
				echo "<tr><td bgcolor =\"#996699\">Favourite Song : </td><td bgcolor=\"#996699\">" .$result['favsong'] ."</td></tr>";
				echo "<tr><td bgcolor=\"#999966\">About Me : </td><td bgcolor=\"#999966\">" .$result['aboutme'] ."</td></tr>";
				echo '</table>';
				//echo '<p>';
			} else {
				echo " ";
			}
		}
		echo '</div>';	 
	} 
	else {
		echo "You cannot view this page. Fuck off.";
	}	
	
	
?>