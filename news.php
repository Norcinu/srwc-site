<?php
	session_start();
	require_once('Connections/srwc.php');
	mysql_select_db('pfrgwbtg_e107') or die(mysql_error());
	
	$c = $_GET['c'];
	$sql_clan_news = mysql_query("SELECT * FROM srwc_news WHERE category = 'Clan News'");
	$sql_misc_news = mysql_query("SELECT * FROM srwc_news WHERE category = 'misc'");
	$sql_all_news = mysql_query("SELECT * FROM srwc_news WHERE nid > 0");
	
	echo '<table>';
	echo '<tr>';
	echo '<td><a href="index.php?page=news&amp;c=clan">Clan news</a></td>';
	echo '<td><a href="index.php?page=news&amp;c=misc">MISC</a></td>';
	echo '<td><a href="index.php?page=news&amp;c=all">all news</a></td>';
	echo '</tr>';
	echo '</table> <p></p>'; //<p>
	
	if ($_GET['c'] == clan){
		
		$result = $sql_clan_news;
		//$story = mysql_fetch_array($result);
		
		while ($story = mysql_fetch_array($result)) 
		{
	  		print '<h2>'.$story['headline'].'</h2>';
	  		echo $story['newsstory'];
		}
	} else
		if($_GET['c'] == misc) {
			$result = $sql_misc_news;
			while ($story = mysql_fetch_array($result)) 
			{
				print '<h2>'.$story['headline'].'</h2>';
				echo $story['newsstory'];
			}	
		}
		else if($_GET['c'] == all){
			$result = $sql_all_news;
			while ($story = mysql_fetch_array($result)) 
			{
				print '<h2>'.$story['headline'].'</h2>';
				echo $story['newsstory'];
			}
		}
	else {
		echo "Well like click a news category.";
	}

?>
