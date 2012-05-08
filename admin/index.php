<?php 
	session_start();
	include_once('../Connections/srwc.php');
	echo "THIS WILL BE THE ADMIN PAGE WHERE I WILL BE ABLE TO EDIT EVERYTHING BLUD.";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>RIDERS OF THE NIGHT CLAN SITE</title>
<link rel="stylesheet" href="css/site.css" type="text/css" />
</head>

<body>

	<form enctype="multipart/form-data" action="upload.php" method="post">
  		<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
		Upload this file: <input name="userfile" type="file">
  		<input type="submit" value="Send File">
	</form>
</body>

</html>