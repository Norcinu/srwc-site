<?
	//include_once('../Connections/srwc.php');
	include('read_dir.php');
	$dbcnx = mysql_connect("localhost", "pfrgwbtg_unicron", "emily");
     
	mysql_select_db("pfrgwbtg_ivbd1");
      
	$img = $_REQUEST["img"];

    $result = mysql_query("SELECT * FROM srwc_images WHERE imgid=" . $img . ""); 
    if (!$result) { 
		echo("<b>Error performing query: " . mysql_error() . "</b>"); 
		exit(); 
    }
    while ($row = mysql_fetch_array($result) ) { 
		$imgid = $row["imgid"];
		$encodeddata = $row["sixfourdata"]; 
	}
	mysql_close($dbcnx);
	echo base64_decode($encodeddata);
?>