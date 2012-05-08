<?php
	session_start();
	require_once('Connections/srwc.php');
	
	$srwc;
	mysql_select_db('pfrgwbtg_e107') or die(mysql_error());
	
	$memberlist = mysql_query("SELECT * FROM srwc_site_users WHERE username = 'u' ");
	
	while($result = mysql_fetch_array($memberlist)){
		//echo 'uid: ' .$result['uid'] .' : ';
		//echo 'Username: '; 

		if ($_GET['u'] == $result['username']){
			echo "Real Name : " .$result['realname'] ."<br />";
			echo "Homepage : " .$result['homepage'] ."<br />";
			echo "Favourite Game : " .$result['favgame'] ."<br />";
			echo "Favourite Band : " .$result['favband'] ."<br />";
			echo "Favourite Song : " .$result['favsong'] ."<br />";
			echo "Favourite Game : " .$result['favgame'] ."<br />";
			echo "About Me : " .$result['aboutme'] ."<br />"; 
		}
	}
?>