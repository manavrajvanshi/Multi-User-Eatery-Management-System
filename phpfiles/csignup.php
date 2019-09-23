<!doctype html>
<html>
	<head>
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
	</head>
	<body>
		<div>
		<?php


		$server="localhost";
		$username="root";
		$password="";
		$databasename="DB2";
		$sql="";

		$conn = mysqli_connect($server, $username, $password,$databasename);
		 
		 // Check connection
			if($conn === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}

			else {
				//echo "<P style='color:red; text-align:center'>Connected to Restaurant's Database Server.<br></p>";
			}

			
		// variables to insert data for customer

		$cname = $_GET['name'];
		$ph = $_GET['phone'];	
		$csex = $_GET['gender'];
		$add = $_GET['address'];
		$pwd = $_GET['password'];

		if (empty($cname)| !preg_match("/^[a-zA-Z ]*$/",$cname)) {
			$message = "ENTER A VALID NAME.";
		echo "<script type='text/javascript'>alert('$message');</script>";

			echo"<a href= 'http:///localhost:8044/iwp/customersignup.html'><P style='color:blue; text-align:center'>GO BACK TO SIGNUP PAGE</p></a>";
		}
					
		elseif ( strlen($ph) != 10|| $ph<1000000000) {

			 $message =  " Please enter a valid phone number.";
			 echo"<a href= 'http:///localhost:8044/iwp/customersignup.html'><P style='color:blue; text-align:center'>GO BACK TO SIGNUP PAGE</p></a>";
		echo "<script type='text/javascript'>alert('$message');</script>";

			
		}

		elseif (empty($csex)) {
				
				$message =  " Please select a gender.";
		echo "<script type='text/javascript'>alert('$message');</script>";

			echo"<a href= 'http:///localhost:8044/iwp/customersignup.html'><P style='color:blue; text-align:center'>GO BACK TO SIGNUP PAGE</p></a>";
		}
					
						
		elseif (empty($add)) {
			
				$message =  " Please enter an address";
		echo "<script type='text/javascript'>alert('$message');</script>";

			echo"<a href= 'http:///localhost:8044/iwp/customersignup.html'><P style='color:blue; text-align:center'>GO BACK TO SIGNUP PAGE</p></a>";
		}
									
		elseif (strlen($pwd)==0|strlen($pwd)>10) {
			
				$message =  " INVALID PASSWORD.";
		echo "<script type='text/javascript'>alert('$message');</script>";

			echo"<a href= 'http:///localhost:8044/iwp/customersignup.html'><P style='color:blue; text-align:center'>GO BACK TO SIGNUP PAGE</p></a>";
		}

		else{
			
			

			$sql="INSERT INTO customer(password,name,phno,sex,address) VALUES('$pwd','$cname','$ph','$csex','$add')";
		//	Inserting into TABLE
				if(mysqli_query($conn,$sql)){
					//echo "<P style='color:red; text-align:center'>Data inserted into server. <br></p>";
				}
				else{
					echo "<P style='color:red; text-align:center'>Data NOT inserted into server.<br></p>";
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				unset($sql);
				
			
		unset($sql);
				
		$sql="SELECT cid FROM customer WHERE name ='".$cname."' AND phno='".$ph."'order by cid desc";
		$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					$row = mysqli_fetch_assoc($result);
						echo "<P style='color:red; text-align:center'>You have sucessfully created an account and please make note of your <b>customer ID: " .$row["cid"]."</b><br></p>";
					}
				
				
			unset($sql,$cname,$ph,$csex,$add,$pwd);
			

		mysqli_close($conn);
		echo"<a href= 'http:///localhost:8044/iwp/customerlogin.html'><P style='color:blue; text-align:center'>GO BACK TO LOGIN PAGE</p></a>";
		}
		?>



		</div>
	</body>
</html>