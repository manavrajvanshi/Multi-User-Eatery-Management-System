<!doctype html>
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
$id= $_GET['did'];

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
	
	
	$sql="delete  FROM deliveries WHERE did ='".$id."'";
$result=mysqli_query($conn,$sql);
unset($sql);

	$sql="delete  FROM order_detail WHERE delid ='".$id."'";
$result=mysqli_query($conn,$sql);
unset($sql);

echo "Delivery id: ". $id ." is sucessfully delivered.";

?>
</div>
</body>
</html>