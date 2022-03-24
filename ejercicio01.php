<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php include ('inc_header.html') ?>
</head>

<body>
<div id="container">
<?php
	include ("inc_bd_connect.php");
		
		$result = pg_query("SELECT * FROM alumno");
		if ($result)
		{
					echo "<table border = '1'> \n"; 

			$registros= pg_num_rows($result);
			for ($i=0;$i<$registros;$i++)
				{
				$row = pg_fetch_array ($result,$i );
				echo "<tr><td>", $row['idalumno'], "</td>";
				echo "<td>", $row['nocta'], "</td>";
				echo "<td>", $row['noalumno'], "</td>";
				echo "<td>", $row['appaterno'], "</td>";
				echo "<td>", $row['apmaterno'], "</td></tr> \n ";
				
			}
					echo  "</table>";

			
			pg_free_result($result);

		}


	include ('inc_footer.html') 
?>

</body>
</html>
