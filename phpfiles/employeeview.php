<html>
	<head>
		<title>
			View Employee
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
				margin: 2% 30% 0% 30%;
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
	//	echo "<P style='color:red; text-align:center'>Connected to Restaurant's Database Server.<br></p>";
		
		
		
		$sql = "SELECT * from emp";
$result = mysqli_query($conn, $sql);
echo "Employee Details: ";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo "<table><tr><th>Employee ID</th><th>Name</th><th>Sex</th><th>D.O.B.</th><th>Salary</th><th>PId</th><th>Password</th><th>Address</th><th>Phone</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["empid"]. "</td><td>" . $row["ename"]. "</td><td>". $row["sex"]."</td><td>". $row["dob"]."</td><td>".$row["salary"]."</td><td>".$row["pid"]."</td><td>". $row["password"]. "</td><td>".$row["address"]."</td><td>".$row["phno"]."</td></tr>";
    }
	
	
		echo "<br> </table><a href = 'http:///localhost:8044/iwp/manageradmin.html' >LOGOUT</a>	";
} else {
    echo "0 results";
}

mysqli_close($conn);	
	}
?>
</div>
</body>
</html>