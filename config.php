<?php 

 $host = "localhost:manny.db.elephantsql.com (manny-01)";
 $user = "iyrbjpkv";
 $pass = "IFFB3unX25uJPCj9u9PojgTg7CAOexon";
 $database = "iyrbjpkv";
//$db=mysqli_connect($host,$user,$pass,$database) or die("database not connected");
$db=pg_connect("host=$host dbname=$database user=$user password=$pass")
   or die ("Could not connect to server\n");
?>
