<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" src="../style.css" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div>
	<h1>Admin Details</h1>
	<hr />
<div>
<div>
	<table border="1" align="center">
		<tr>
			<td>Name</td>
			<td>Email</td>
			<td>Password</td>
			<td>Gender</td>
		</tr>
			<?php
				include("config.php");

				$res=pg_query($db,"select * from admin");
				while($r=mysqli_fetch_assoc($res))
				{		
			?>	
		<tr>
				<td><?php echo $r['name']; ?></td>
				<td><?php echo $r['gender']; ?></td>
				<td><?php echo $r['email']; ?></td>
				<td><?php echo $r['password']; ?></td>
		</tr>
			<?php
			}
		
			 $row = pg_fetch_row($res);
 			echo $row[0] . "\n";
 			pg_close($con);
			?>
	</table>
	
</div>
<h4 align="center"> <a href="index.php">BACK</a></h4> </p>
</body>
</html>
