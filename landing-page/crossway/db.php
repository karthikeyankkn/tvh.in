<?php
$servername = "landingPg.db.6952381.e5d.hostedresource.net";
$username = "tvh_landing";
$password = "Land@2017";
$dbname = "landingPg";

$hostname = "landingPg.db.6952381.e5d.hostedresource.net";
$username = "landingPg";
$dbname = "landingPg";

//These variable values need to be changed by you before deploying
$password = "Land@2017";


//Connecting to your database
mysql_connect($hostname, $username, $password) OR DIE ("Unable to
connect to database! Please try again later.");
mysql_select_db($dbname);

?>	
	