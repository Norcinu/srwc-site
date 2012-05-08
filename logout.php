<?php
	session_start();
	unset($_SESSION['valid_user']);
	unset($_SESSION['auth']);
	session_destroy();
?>

<html>
<head><title>Logging out.</title>
</head>

<meta http-equiv="refresh" content="1; url=index.php" />

<body>
	<img src="images/logout/you're a homo.jpg" alt="homo" align="middle" />
</body>
</html>