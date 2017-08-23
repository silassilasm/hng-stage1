<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "hngintern";
$conect = mysql_connect($db_host, $db_username, $db_password)
or die ("Error in Connection");
mysql_select_db($db_name)
or die ("Error in Connection");
?>
