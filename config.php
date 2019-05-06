<?php 
 $host = "manny.db.elephantsql.com (manny-01)";
 $user = "iyrbjpkv";
 $pass = "IFFB3unX25uJPCj9u9PojgTg7CAOexon";
 $dbs = "iyrbjpkv";
$port="5432";

 // Open a PostgreSQL connection
// $db = mysqli_connect("host=$host dbname=$dbs user=$user password=$pass")
  // or die ("Could not connect to server\n");

$db=mysqli_connect($host,$user,$pass,$dbs,$port) or die("database not connected");

?>
