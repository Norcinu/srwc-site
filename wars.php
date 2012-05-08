<?php
	session_start();
	
	$srwc;
	mysql_select_db(pfrgwbtg_e107) or die(mysql_error());
	
	$sql = mysql_query("SELECT * FROM srwc_wars WHERE war_id > 0 ORDER BY 'wardate'");
	
	while($result = mysql_fetch_array($sql)){
		echo "Opponent: " .$result['opponent'] ."\tDate: " .$result['wardate'] ."\tUS: " .$result['home_score'] ."\tTHEM: " .$result['away_score'] ."\tCompetition: " .$result['competition'] ." " .$result['game_type'] ."\tMaps: ". $result['map_one'] ." " .$result['map_two'];
	}
?>