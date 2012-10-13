<?php

function error($msg) { 
?>
<html>
<head>
<meta charset="utf-8">
<title>Error!</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/custom.css" rel="stylesheet">
</head>
<body>
<div class="container"> <br />
  <div class="alert alert-error"> <strong>Error!</strong> Check your config.php! </div>
  <code><?php echo $msg; ?></code> </div>
</body>
</html>
<?php	
die();
}

mysql_connect($sql_host, $sql_user, $sql_pass) or error(mysql_error());
mysql_select_db($sql_database) or error(mysql_error());

if(!isset($server) or !isset($server_motd_progress))
	error("$server or $server_motd_progress is not set!");
?>