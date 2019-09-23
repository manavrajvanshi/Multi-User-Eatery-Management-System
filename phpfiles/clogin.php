<?php
session_start();
$_SESSION['id']=$_GET['customerid'];
?>
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
				margin: 10% 30% 0% 30%;
				border:0	px solid blue;
				
			}


			h1{
				font-family: "Pristina";
				font-style: normal;
				font-size: 3.2em;
			}
    
    }
</style>
<body>
<div>
<?php 

$id= $_GET['customerid'];
$pass= $_GET['customerpassword'];


$server="localhost";
$username="root";
$password="";
$databasename="DB2";
$sql="";

if (empty($id)) {
		echo " Please enter a customer id.";
		$message = "check your customer id.";
echo "<script type='text/javascript'>alert('$message');</script>";
}
							
elseif (empty($pass)) {
		echo " Password can't be empty.";
		$message = "password CANT BE EMPTY.";
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
$sql="SELECT * FROM customer WHERE cid ='".$id."' AND password='".$pass."'";
$result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result) == 1) {
    // output data of each row
    $row = mysqli_fetch_assoc($result); 
        echo "Logged in as " . $row["name"]. "<br>" . $row["phno"]."<br>ADDRESS:" . $row["address"]. "<br>";
		
		echo "<form action='http:///192.168.1.103:8044/iwp/phpfiles/menu.php' method = 'get' style='text-align:center'>
		<input type='submit' value='HOME DELIVERY MENU'>
		</form>";
echo " <a href = 'http:///192.168.1.103:8044/iwp/welcome.html' >LOGOUT</a>	";		
	} else {$message = "INVALID CREDENTIALS.PLEASE ENTER VALID DATA OR SIGN UP.";
echo "<script type='text/javascript'>alert('$message');</script>";

    echo "Please enter valid data or signup by clicking <a href = 'http:///localhost:8044/iwp/customersignup.html' >here</a>.";
   
}	

unset($sql,$result);
}	

mysqli_close($conn);

?>
</div>


</body>
</html>