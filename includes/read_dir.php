<?

	//include_once('../Connections/srwc.php');
	$dbcnx = mysql_connect("localhost", "pfrgwbtg_unicron", "emily"); 
	mysql_select_db("pfrgwbtg_ivbd1");
	
	$path = "./images/rtcw";
	$dir_handle = opendir($path) or die("Unable to open directory $path");
		
	while ($file = readdir($dir_handle)) {
		$filetyp = substr($file, -3);
		if ($filetyp == 'gif' OR $filetyp == 'jpg') {
			$handle = fopen($file,'r');
			$file_content = fread($handle,filesize($file));
			fclose($handle);
			$encoded = chunk_split(base64_encode($file_content)); 
			$sql = "INSERT INTO srwc_images SET sixfourdata='$encoded'"; 
			mysql_query($sql);
		}
	}
	
	closedir($dir_handle);
	echo("complete");
	mysql_close($dbcnx);
?>
