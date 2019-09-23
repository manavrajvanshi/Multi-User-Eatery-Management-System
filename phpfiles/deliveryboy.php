<html>
	<head>
		<title> 
			Delivery Boy Login
		</title>
	
	
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
					padding:0 0 5% 0;
					margin: 5% 30% 0% 30%;
					border:0px solid blue;
					
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
$id= $_GET['dboyid'];
$pass= $_GET['dboypassword'];


$server="localhost";
$username="root";
$password="";
$databasename="DB2";
$sql="";

if (empty($id)) {
		echo " Please enter an emp id.";
}
							
elseif (empty($pass)) {
		echo " Password can't be empty.";
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
$sql="SELECT * FROM emp WHERE empid ='".$id."' AND password='".$pass."' AND pid=4";
$result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result) == 1) {
    // output data of each row
    $row = mysqli_fetch_assoc($result); 
        echo "Sucessfully logged in as " . $row["ename"]."<br><br>";
		
		echo "<form action='http:///localhost:8044/iwp/phpfiles/dboy2.php' method = 'get' style='text-align:center'>
		Enter delivery id of delivered package: <br>
		<input type ='text' name='did'><br><br>
		<input type='submit' value='Confirm Delivery'>
		</form>";
		
	} else {
    echo "INVALID CREDENTIALS. ";
}	

unset($sql,$result);
}	

mysqli_close($conn);
?>
</div>

</body>
</html>