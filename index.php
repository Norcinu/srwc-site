<?php 
	session_start();
	require_once('Connections/srwc.php');
    require("../forum/SSI.php");
	$m_time = explode(" ",microtime()); 
 	$m_time = $m_time[0] + $m_time[1]; 
 	$starttime = $m_time;
	$inTwoMonths = 60 * 60 * 24 * 60 + time();  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>RIDERS OF THE NIGHT CLAN SITE</title>
<link rel="stylesheet" href="css/site.css" type="text/css" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="javascript/prototype.js"></script>
<script type="text/javascript" src="javascript/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="javascript/lightbox.js"></script>
</head>

<body>

	<div id="container">
	
		<div id="banner"><h1 align="center">
		  WE'RE THE RIDERS OF THE NIGHT AND WE'D RATHER FUCK THAN FIGHT WE'RE THE RIDERS OF THE CLOCK END HIGHBURY</h1>
		</div>
		<div align="center"> <!-- align="center" -->
		<div id="menulayer">
			
			<ul class="menu">
			  <li>
				<a href="index.php">
				  <b><span>Index</span></b><em></em>
				</a>
			  </li>
			  <li>
				<a href="index.php?page=news">
				  <b><span>Clan News</span></b><em></em>
				</a>
			  </li>
			  <li>
				<a href="index.php?page=roster">
				  <b><span>Roster</span></b><em></em>
				</a>
			  </li>
			  <li>
				<a href="index.php?page=wars">
				  <b><span>War Results</span></b><em></em>
				</a>
			  </li>
			  <li>
				<a href="index.php?page=pictures">
				  <b><span>Pictures</span></b><em></em>
				</a>
			  </li>
			  <li>
				<a href="index.php?page=about">
				  <b><span>About Us</span></b><em></em>
				</a>
			  </li>
			  <li>
				<a href="index.php?page=login">
				  <b><span>Login</span></b><em></em>
				</a>
			  </li>
		  </ul>
		
		 </div>
	  </div>
	
		<!-- still in the container layer -->
		<div id="userlayer">
			<?php
				//this is where all our user options will go. site memberlist and config options ofc.
				// perhaps add a files page?
				$_SESSION['authed'] == false;
				if ($authed == false) {
					echo 'Welcome <b>Anonymous</b>, <a href="index.php?page=login">login</a> to get some features and stuff.';
				} else 
					if(($authed == true) && ($userlevel == 'user')){
						echo 'Welcome <b>' .$_SESSION['valid_user'] .'</b> :). Click <a href="logout.php">here</a> to log out. <p>';	
						echo '<div id="center"><a href="userarea/index.php">User Settings</a> <a href="index.php?page=memberlist">Site Members</a> <a href="index.php?page=memberlist&u=online">Who\'s online</a> <a href="blogs/index.php">Blog-me-up-chief</a></div>';
					}
					else
						if (($authed == true) && ($userlevel == 'admin')){
							echo 'Welcome <b>' .$_SESSION['valid_user'] .'</b> Mr admin sir! Click <a href="logout.php">here</a> to log out. <p>';	
							echo '<div id="center"><a href="userarea/index.php">User Settings</a> <a href="index.php?page=memberlist">Site Members</a> <a href="index.php?page=memberlist&u=online">Who\'s online</a> <a href="blogs/index.php">Blog-me-up-chief</a> <a href="admin/index.php">Administer this site</a></div>';
						}
						else {
							echo 'wrong. <a href="logout.php">here</a>';
						}
			?>
		
		</div>
		<div id="bodyLayer">
		
		<?php
		
			/*$day = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
			$month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October','November', 'December'); //dec was first
			print ($day[date('w')].' '.date('j').' ' .$month[date('n')].' ' .date('Y').' - '.date('g').':'.date('i').' '.date('A'));	
			echo "<br /> <br />";	//$month[date('n')]*/
			$today = date("l F j, Y, g:i a");  
			echo $today;
			            
			if(!isset($_GET['page'])){
					//include('news.php');
				} else {
					if(file_exists($_GET['page'].'.php')){
						include($_GET['page'].'.php');
					} else 
						if (file_exists($_GET['page'].'.php')){
							include($_GET['page'].'.php');
						}
						else
							if (file_exists($_GET['page'].'.php')){
								include($_GET['page'].'.php');
							}
							
							else 
								if (file_exists($_GET['page'].'.php')){
									include($_GET['page'].'.php');
								}
								else 
								if (file_exists($_GET['page'].'.php')){
									include($_GET['page'].'.php');
								}
									else 
										if (file_exists($_GET['page'].'.php')){
											include($_GET['page'].'.php');
										}
										else 
											if (file_exists($_GET['page'].'.php')){
												include($_GET['page'].'.php');
											}
											else{
												echo 'Sorry, could not find <strong>' . $_GET['page'] .'.php</strong>';
											}
			}
		  /* might be worth using the ssi-examples shit
		  ssi_topTopicsReplies();
		  ssi_latestMember(); 
		  ssi_menubar();
		  ssi_quickSearch();
		  ssi_login();
		  ssi_logout();*/
		  $round = 3;// The number of decimal places to round the micro time to.
		  $m_time = explode(" ",microtime()); 
		  $m_time = $m_time[0] + $m_time[1]; 
 		  $endtime = $m_time; 
		  $totaltime = ($endtime - $starttime);  
		?>
		<p>
		<span class="microtime">
		<?php echo "Page loading took:". round($totaltime,$round) ." seconds"; ?>
		</span>
		</p>
	</div>
	
	<!-- end of container -->
	
	</div>
</body>
</html>
