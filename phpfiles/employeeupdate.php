<!doctype html>
<html>
	<head>
		<title>
			Update Employee
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

	
// variables to insert data for emp
$empid = $_GET['empid'];
$ename = $_GET['name'];
$ph = $_GET['phone'];	
$esex = $_GET['gender'];
$add = $_GET['address'];
$pwd = $_GET['password'];
$sal = $_GET['salary'];
$bday= $_GET['dob'];
$p=$_GET['pid'];
if (empty($empid)) {
    $message = "EMPID CANT BE EMPTY.";
echo "<script type='text/javascript'>alert('$message');</script>";

	echo"<a href= 'http:///localhost:8044/iwp/employeeupdate.html'><P style='color:blue; text-align:center'>GO BACK TO update PAGE</p></a>";
}

if (empty($ename)| !preg_match("/^[a-zA-Z ]*$/",$ename)) {
    $message = "INVALID NAME.";
echo "<script type='text/javascript'>alert('$message');</script>";

echo"<a href= 'http:///localhost:8044/iwp//employeeupdate.html'><P style='color:blue; text-align:center'>GO BACK TO update PAGE</p></a>";
}
			
elseif (strlen($ph) != 10|| $ph<1000000000) {

	 $message =  " Please enter a valid phone number.";
echo "<script type='text/javascript'>alert('$message');</script>";

echo"<a href= 'http:///localhost:8044/iwp/employeeupdate.html'><P style='color:blue; text-align:center'>GO BACK TO update PAGE</p></a>";
}

elseif (empty($esex)) {
		
		$message =  " Please select a gender.";
echo "<script type='text/javascript'>alert('$message');</script>";

echo"<a href= 'http:///localhost:8044/iwp/employeeupdate.html'><P style='color:blue; text-align:center'>GO BACK TO update PAGE</p></a>";
}
			
				
elseif (empty($add)) {
	
		$message =  " Please enter an address";
echo "<script type='text/javascript'>alert('$message');</script>";

echo"<a href= 'http:///localhost:8044/iwp/employeeupdate.html'><P style='color:blue; text-align:center'>GO BACK TO update PAGE</p></a>";
}

elseif (empty($p)) {
	
		$message =  " Please enter a pid";
echo "<script type='text/javascript'>alert('$message');</script>";

echo"<a href= 'http:///localhost:8044/iwp/employeeupdate.html'><P style='color:blue; text-align:center'>GO BACK TO update PAGE</p></a>";
}

elseif ($bday <10000000 || $bday > 99991231) {
	
		$message =  " Please enter a valid dob";
echo "<script type='text/javascript'>alert('$message');</script>";

echo"<a href= 'http:///localhost:8044/iwp/employeeupdate.html'><P style='color:blue; text-align:center'>GO BACK TO update PAGE</p></a>";
}

elseif (empty($sal)|!(is_numeric($sal)))	 {
	
		$message =  " Please enter a valid salary";
echo "<script type='text/javascript'>alert('$message');</script>";

echo"<a href= 'http:///localhost:8044/iwp/employeeupdate.html'><P style='color:blue; text-align:center'>GO BACK TO update PAGE</p></a>";
}				
elseif (empty($pwd)) {
	
		$message =  " Password can't be empty.";
echo "<script type='text/javascript'>alert('$message');</script>";

echo"<a href= 'http:///localhost:8044/iwp/employeeupdate.html'><P style='color:blue; text-align:center'>GO BACK TO update PAGE</p></a>";
}



else{
	
	

	$sql="update emp set ename='$ename',sex='$esex',dob='$bday',salary='$sal',pid='$p',password='$pwd',address='$add',phno='$ph' where empid='$empid'";
//	Inserting into TABLE
		if(mysqli_query($conn,$sql)){
			echo "<P style='color:red; text-align:center'>Employee Details Updated Sucessfully. <br></p>";
			echo " <a href = 'http:///localhost:8044/iwp/manageradmin.html' >LOGOUT</a>	";
		}
		else{
			echo "<P style='color:red; text-align:center'>Data NOT inserted into server.<br></p>";
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		unset($sql);
		

		
	unset($sql,$cname,$ph,$csex,$update,$pwd);
	

mysqli_close($conn);

}
?>



</div>
</body>
</html>