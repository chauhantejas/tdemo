<?php 
 $host = "localhost:manny.db.elephantsql.com (manny-01):5432/";
 $user = "iyrbjpkv";
 $pass = "IFFB3unX25uJPCj9u9PojgTg7CAOexon";
 $dbs = "iyrbjpkv";
 

 // Open a PostgreSQL connection
// $db = mysqli_connect("host=$host dbname=$dbs user=$user password=$pass")
  // or die ("Could not connect to server\n");

$db=mysqli_connect($host,$user,$pass,$dbs) or die("database not connected");

?>
