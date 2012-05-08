<!--<span class="roster">-->

<ul id="rosterList">
<?php

	include_once("Connections/srwc.php");
	session_start();
	
	$srwc;
	mysql_select_db("pfrgwbtg_e107");
	
	$sql = mysql_query("SELECT * FROM srwc_roster WHERE id > 0 ORDER BY player_name");
	//$result = mysql_fetch_array($sql);
	
	while($result = mysql_fetch_array($sql)){
		$user_rank = $result["clan_rank"];
		$extension = "gif";
		//$concat = $user_rank & $extension;
		//echo "<div align=\"left\">";
		//echo "<ul id=\"rosterList\">";
		echo "<li>Name: " .$result["player_name"] ."</li>";
		if ($user_rank != 'Private'){
			echo "<li>Rank: " .$result["clan_rank"] ." <br /><img src=\"images/army/" .$user_rank ."." .$extension ."\" align=\"right\" alt=\"Clan Rank\"/></li>";
		} else {
			echo "<li>Rank: " .$result["clan_rank"] ."</li>";
		}
		echo "<li>Real Name: " .$result["real_name"] ."</li>";
		echo "<li>Location: " .$result["location"] ."</li>";
		echo "<li>Favourite Class: " .$result["fav_class"] ."</li>";
		echo "<li>Favourite Map: " .$result["fav_map"] ."</li>";
		echo "<li class=\"padMeUp\">Biography: " .$result["biog"] ."</li>";	
		//echo "</ul>";
		//echo "</div>";
		// replace this with a list menu.
	}

?> 
</ul>
<!--</span>--> 