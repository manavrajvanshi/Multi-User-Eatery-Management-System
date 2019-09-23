<?php
session_start();
$_SESSION['id']=$_GET['Empid'];
$_SESSION['date']=$_GET['orderdate'];
$_SESSION['table']=$_GET['tableno'];

echo $_SESSION['id'];
?>
<!doctype html>
<html>
	<head>
		<title>
			Waiter
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
				padding:0 0 5% 0;
				margin: 5% 30% 5% 30%;
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
<?php
$id= $_GET['Empid'];
$pass= $_GET['password'];
$orderdate=$_GET['orderdate'];
$tableno=$_GET['tableno'];


$server="localhost";
$username="root";
$password="";
$databasename="DB2";
$sql="";

if (empty($id)) {
		echo " Please enter a customer id.";
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
$sql="SELECT * FROM emp WHERE empid ='".$id."' AND password='".$pass."' AND pid=3";
$result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result) == 1) {
    // output data of each row
    $row = mysqli_fetch_assoc($result); 
        echo "<div>Sucessfully logged in as " . $row["ename"]."<br>";
		
		echo "<a href='http:///localhost:8044/iwp/phpfiles/menudinein.php' >Click here to enter Customer's order.</a>";
		
	} else {
    echo "INVALID CREDENTIALS. ";
}	

unset($sql,$result);

}	

mysqli_close($conn);

?>


</body>
</html>