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


	$server="localhost";
	$username="root";
	$password="";
	$databasename="DB2";
	$sql="";

	$conn = mysqli_connect($server, $username, $password,$databasename);
	 
	 /*// Check connection
		if($conn === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}

		else {
			echo "<P style='color:red; text-align:center'>Connected to Restaurant's Database Server.<br></p>";
		}
	*/
		
	// variables to insert data for emp

	$ename = $_GET['name'];
	$ph = $_GET['phone'];	
	$esex = $_GET['gender'];
	$add = $_GET['address'];
	$pwd = $_GET['password'];
	$sal = $_GET['salary'];
	$bday= $_GET['dob'];
	$p=$_GET['pid'];

	if (empty($ename)| !preg_match("/^[a-zA-Z ]*$/",$ename)) {
		$message = "INVALID NAME.";
	echo "<script type='text/javascript'>alert('$message');</script>";

		echo"<a href= 'http:///localhost:8044/iwp/employeeadd.html'><P style='color:blue; text-align:center'>GO BACK TO ADD PAGE</p></a>";
	}
				
	elseif (strlen($ph) != 10|| $ph<1000000000) {

		 $message =  " Please enter a valid phone number.";
	echo "<script type='text/javascript'>alert('$message');</script>";

		echo"<a href= 'http:///localhost:8044/iwp/employeeadd.html'><P style='color:blue; text-align:center'>GO BACK TO ADD PAGE</p></a>";
	}

	elseif (empty($esex)) {
			
			$message =  " Please select a gender.";
	echo "<script type='text/javascript'>alert('$message');</script>";

	echo"<a href= 'http:///localhost:8044/iwp/employeeadd.html'><P style='color:blue; text-align:center'>GO BACK TO ADD PAGE</p></a>";
	}
				
					
	elseif (empty($add)) {
		
			$message =  " Please enter an address";
	echo "<script type='text/javascript'>alert('$message');</script>";

	echo"<a href= 'http:///localhost:8044/iwp/employeeadd.html'><P style='color:blue; text-align:center'>GO BACK TO ADD PAGE</p></a>";
	}
								
	elseif (empty($p)) {
		
			$message =  " Please enter a pid";
	echo "<script type='text/javascript'>alert('$message');</script>";

		echo"<a href= 'http:///localhost:8044/iwp/employeeadd.html'><P style='color:blue; text-align:center'>GO BACK TO ADD PAGE</p></a>";
	}
	elseif ($bday <10000000 || $bday > 99991231) {
		
			$message =  " Please enter a valid dob";
	echo "<script type='text/javascript'>alert('$message');</script>";

		echo"<a href= 'http:///localhost:8044/iwp/employeeadd.html'><P style='color:blue; text-align:center'>GO BACK TO ADD PAGE</p></a>";
	}

	elseif (empty($sal)) {
		
			$message =  " Please enter a salary";
	echo "<script type='text/javascript'>alert('$message');</script>";

		echo"<a href= 'http:///localhost:8044/iwp/employeeadd.html'><P style='color:blue; text-align:center'>GO BACK TO ADD PAGE</p></a>";
	}


	elseif (empty($pwd)) {
		
			$message =  " Password can't be empty.";
	echo "<script type='text/javascript'>alert('$message');</script>";

		echo"<a href= 'http:///localhost:8044/iwp/employeeadd.html'><P style='color:blue; text-align:center'>GO BACK TO ADD PAGE</p></a>";
	}

	elseif (strlen($pwd)==0|strlen($pwd)>10) {
		
			$message =  " Password should be of 10 chars at most and should not be null.";
	echo "<script type='text/javascript'>alert('$message');</script>";

		echo"<a href= 'http:///localhost:8044/iwp/employeeadd.html'><P style='color:blue; text-align:center'>GO BACK TO ADD PAGE</p></a>";
	}

	else{
		
		

		$sql="INSERT INTO emp(ename,sex,dob,salary,pid,password,address,phno) VALUES('$ename','$esex','$bday','$sal','$p','$pwd','$add','$ph')";
	//	Inserting into TABLE
			if(mysqli_query($conn,$sql)){
				echo "<P style='color:red; text-align:center'>Employee Added Sucessfully . <br></p>";
				echo " <a href = 'http:///localhost:8044/iwp/manageradmin.html' >LOGOUT</a>	";
			}
			else{
				echo "<P style='color:red; text-align:center'>Data NOT inserted into server.<br></p>";
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			unset($sql);
			

			
		unset($sql,$cname,$ph,$csex,$add,$pwd);
		

	mysqli_close($conn);

	}
	?>



	</div>
	</body>
</html>