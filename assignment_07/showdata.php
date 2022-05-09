<?php 
				
	
	$db_name = 'student';
	$db_user = 'root';
	$db_pass = '';
	$db_host = 'localhost';
	
	$conn = mysqli_connect($db_host, $db_user, $db_pass,$db_name);
	if (!$conn ) 
	{
		$result=  $conn->connect_error;
	}
	else
	{
		$sql = "SELECT * FROM studentinfo";		
		$result = $conn->query($sql);		
                if ($result->num_rows >0) 
				{
					echo'<table border="1">';
					echo "<tr><th>Name</th><th>Roll</th><th>Class</th><th>Address</th></tr>";
 		       	while($row = $result->fetch_assoc()) 
					{
						$name =$row['name'];
						$roll=$row['roll'];
						$class =$row['class'];
						$address =$row['address'];
						echo "<tr><td>".$name ."</td><td>".$roll."</td><td>".$class."</td><td>".$address."</td></tr>";
     		       }
     		       echo"</table>";
     		  	}
	$conn->close();
	}

?>	
<html>
<head>
</head>
<body>
<h2><a href="index.html">Click Here !!! fro Home Page</a?</h2>
</body>
</html>
