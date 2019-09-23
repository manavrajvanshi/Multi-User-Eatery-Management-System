<!doctype html>
<html>
<head>
		<title>
			Remove Employee
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
				font-size: 1.75em;
				text-align: center;
				padding:1% 0 5% 0;
				margin: 2% 35% 0% 35%;
				border:0px solid blue;
			
			}


			h1{
				font-family: "Pristina";
				font-style: normal;
				font-size: 3.2em;
			}
					
			table{
				margin: auto;
			}
		</style>
	<head>
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
	//	echo "<P style='color:red; text-align:center'>Connected to Restaurant's Database Server.<br></p>";
	}

	


$empid = $_GET['empid'];


if (empty($empid)) {
    $message = "EMPID CANT BE EMPTY.";
echo "<script type='text/javascript'>alert('$message');</script>";
}



elseif ($empid <= 0) {
    $message = "invalid entry";
echo "<script type='text/javascript'>alert('$message');</script>";
	
}	
			

else{
	$sql = "SELECT empid FROM emp where empid='$empid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
	
    

	

	$sql="DELETE FROM emp WHERE empid='$empid'";
//	Inserting into TABLE
		if(mysqli_query($conn,$sql)){
			echo "<P style='color:red; text-align:center'>employee removed sucessfully . <br></p>";
			echo " <a href = 'http:///localhost:8044/iwp/manageradmin.html' >LOGOUT</a>	";
		}
		else{
			echo "<P style='color:red; text-align:center'>Employee not removed.<br></p>";
			
		}
		unset($sql);
		

		
	unset($sql,$cname,$ph,$csex,$add,$pwd);
	

mysqli_close($conn);

}
else{
	$message = "invalid entry";
echo "<script type='text/javascript'>alert('$message');</script>";
	echo"Employee does not exist";}
}
?>



</div>
</body>
</html>