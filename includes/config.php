<?php

//WEBSITE VARS
$title = "BukkitGames";

//SERVER VARS
$servers = array("hg.mooshroom.net","hg1.mooshroom.net");
$server_motd_progress = "Game is in progress.";

//MYSQL VARS
$sql_host = "";
$sql_user = "";
$sql_pass = "";
$sql_database = "";


//DON'T EDIT ANYTHING BEYOND HERE
mysql_connect($sql_host, $sql_user, $sql_pass) or die(mysql_error());
mysql_select_db($sql_database) or die(mysql_error());

?>