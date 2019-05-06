<?php
include 'config.php';
 $query = 'SELECT * FROM admin';
 $results = pg_query($con, $query) or die('Query failed: ' . pg_last_error());

 $row = pg_fetch_row($results);
?>
