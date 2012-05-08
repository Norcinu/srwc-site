<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_srwc = "localhost";
$database_srwc = "pfrgwbtg_e107";
$username_srwc = "pfrgwbtg_unicron";
$password_srwc = "emily";
$srwc = mysql_pconnect($hostname_srwc, $username_srwc, $password_srwc) or trigger_error(mysql_error(),E_USER_ERROR); 
?>