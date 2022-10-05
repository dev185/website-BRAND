<!DOCTYPE html> 
<html> 

<head> 
	<title>Insert Page page</title> 
</head> 

<body> 
	<center> 
		<?php 

		$conn = mysqli_connect("localhost", "root", "", "login"); 
		
 
		if($conn === false){ 
			die("ERROR: Could not connect. "
				. mysqli_connect_error()); 
		} 
		
 
		$username = $_REQUEST['username']; 
		$password = $_REQUEST['password']; 
		$email = $_REQUEST['email']; 

		
 
		$sql = "INSERT INTO login VALUES ('$username', 
			'$password','$email')";
        			

				
		if(mysqli_query($conn, $sql)){ 
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>"; 

			echo nl2br("\n$username\n $password\n $email"); 
			
		} else{ 
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn); 
		} 
		


		mysqli_close($conn); 
		?> 
	</center> 
</body> 

</html> 
