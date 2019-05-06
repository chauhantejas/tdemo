<?php 
 //$host = "manny.db.elephantsql.com(manny-01)";
 //$user = "iyrbjpkv";
 //$pass = "IFFB3unX25uJPCj9u9PojgTg7CAOexon";
 //$dbs = "iyrbjpkv";
 // $db = mysqli_connect('manny.db.elephantsql.com (manny-01)','iyrbjpkv','IFFB3unX25uJPCj9u9PojgTg7CAOexon','iyrbjpkv')
 //or die('Error connecting to MySQL server.');

 $host = "manny.db.elephantsql.com (manny-01)";
 $user = "iyrbjpkv";
 $pass = "IFFB3unX25uJPCj9u9PojgTg7CAOexon";
 $db = "iyrbjpkv";

 // Open a PostgreSQL connection
 $con =pg_connect("host=$host dbname=$db user=$user password=$pass")
   or die ("Could not connect to server\n");

 echo $row[0] . "\n";
 // Closing connection
 pg_close($con);




 // Open a PostgreSQL connection
// $db = mysqli_connect("host=$host dbname=$dbs user=$user password=$pass")
  // or die ("Could not connect to server\n");

//$db=mysqli_connect($host,$user,$pass,$dbs) or die("database not connected");
//$db=mysql_connect('manny.db.elephantsql.com (manny-01):5432','iyrbjpkv','IFFB3unX25uJPCj9u9PojgTg7CAOexon') or die("conncection Error...!");
//$servername = "	postgres://iyrbjpkv:IFFB3unX25uJPCj9u9PojgTg7CAOexon@manny.db.elephantsql.com:5432/iyrbjpkv";
//$username = "iyrbjpkv";
//$password = "IFFB3unX25uJPCj9u9PojgTg7CAOexon";
// Create connection
 
?>
