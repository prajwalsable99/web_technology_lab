<?php 
				
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	
	$roll = $_POST['roll'];
	
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
		
		$sql = "delete from studentinfo where roll='$roll'";		
		
        if ($conn->query($sql) === TRUE)
		{
 		       echo"<center><font color=\"red\">SData Deleted Successfully</font></center>";			
 		}		
		
		else
		{	echo "Error: ". $sql . "<br>". $conn->error;	
			echo"<center><font color=\"red\">Problem in Updating data</font></center>";			
		}
		
	}
	$conn->close();
}

?>	
<html>

<head>
<style>
input[type="password"], input[type="text"] 
{
	border:1px solid;
  background-color:rgba(0,0,0,0.0);
  height: 33px;
  width:240px;
  margin: 2px 0 0 36px;
  padding-left: 10px;
  
  
}

input[type="submit"] 
{
    background-color: #4CAF50;
    color: white;
	height: 42px;
    margin: 10px 0 0 36px;
   width: 250px;
	padding-left: 10px;
}
</style>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>"name="myform"method="post">
     
   		<br><label><b>Roll No:</b></label>
   		<br><input type="text"name="roll"id="roll"placeholder= "Roll No"required="required"onfocus="this.value = '';">
   		
   		
     
   
    		<br><input type="submit"value="Delete Record">	
  <h2><a href="index.html">Click Here !!! fro Home Page</a?</h2>
</body>
</html>
