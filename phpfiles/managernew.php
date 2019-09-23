<!doctype html>
<html>
	<style>
		body {
			
				background-image: url('background.jpg');
				border:0px solid red;
				background-size:100%;
				background-repeat:no-repeat;
				background-attachment: fixed;
				margin:0;
				padding:0;
			
			}
		div {
				font-family: "Pristina";
				font-style: normal;
				background-color: rgba(255,250,205,0.8);		
				font-size: 2em;
				text-align: center;
				padding:0;
				margin: 10% 20% 0% 20%;
				padding-bottom:5%;
				border:0px solid blue;
		
		}
	  input{
		border-radius:5px;
		padding:0 0 0 10px ;
	  }
	  h1{
		    font-family: "Pristina";
			font-style: normal;
			font-size: 3.2em;
	   }
		
	</style>

	<body>
		<div>
		<?php
		$id= $_GET['managerid'];
		$pass= $_GET['managerpassword'];


		$server="localhost";
		$username="root";
		$password="";
		$databasename="DB2";
		$sql="";

		if (empty($id)) {
				echo " Please enter an emp id.";
				$message = "EMPLOYEE ID CANT BE EMPTY.";
		echo "<script type='text/javascript'>alert('$message');</script>";
		}
									
		elseif (empty($pass)) {
				$message = "PASSWORD CANT BE EMPTY.";
		echo "<script type='text/javascript'>alert('$message');</script>";
		}

		else{

		$conn = mysqli_connect($server, $username, $password,$databasename);
		 
		 // Check connection
			if($conn === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}

			else {
				//echo "<P style='color:red; text-align:center'>Connected to Restaurant's Database Server.<br></p>";
			}
			

		// login	
		$sql="SELECT * FROM emp WHERE empid ='".$id."' AND password='".$pass."' AND pid=1";
		$result=mysqli_query($conn,$sql);


		if (mysqli_num_rows($result) == 1) {
			// output data of each row
			$row = mysqli_fetch_assoc($result); 
				echo "Sucessfully logged in as  " . $row["ename"]."<br><br>";
				
				echo "<a href=http:///localhost:8044/iwp/employeeadd.html >Click here to add an employee.</a><br>";
				echo "<a href=http:///localhost:8044/iwp/employeeremove.html >Click here to remove an employee.</a><br>";
				echo "<a href=http:///localhost:8044/iwp/employeeupdate.html >Click here to update the details of an employee.</a><br>";
				echo "<a href=http:///localhost:8044/iwp/phpfiles/employeeview.php >Click here to view employee details.</a><br><br>";
				echo " <a href = 'http:///localhost:8044/iwp/manageradmin.html' >LOGOUT</a>	";
				
			} else {
		   $message = "INVALID CREDENTIALS. ";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "GO BACK TO MANAGER LOGIN <a href = 'http:///localhost:8044/iwp/manageradmin.html' >PAGE</a>	";
			
		}	

		unset($sql,$result);
		}	

		mysqli_close($conn);
		?>
		</div>

	</body>
</html>