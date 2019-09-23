<!doctype html>
<html>
<style>


    body{height: 800px;
        background: url(https://images.bewakoof.com/utter/up-your-game-7-food-styling-tips-that-will-make-you-a-pro.jpg) no-repeat center center;
        background-size:cover;}
    div {
        font-family: Pristina;
        font-style: normal;
        background:lemonchiffon;
        position: fixed;
        top: 40%;
        left: 55%;
        width: 400px;
        margin-top: -160px;
        margin-left: -320px;
        opacity:0.95;
        font-size: 28px;
    }


    h1{
        fill-opacity: 1.0;
        font-family: "Freestyle Script";
        font-style: normal;
        font-size: 50px;
    }
    .myButton {
        -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
        -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
        box-shadow:inset 0px 1px 0px 0px #ffffff;
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf));
        background:-moz-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
        background:-webkit-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
        background:-o-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
        background:-ms-linear-gradient(top, #ededed 5%, #dfdfdf 100%);
        background:linear-gradient(to bottom, #ededed 5%, #dfdfdf 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf',GradientType=0);
        background-color:#ededed;
        -moz-border-radius:3px;
        -webkit-border-radius:3px;
        border-radius:3px;
        border:1px solid #dcdcdc;
        display:inline-block;
        cursor:pointer;
        color: #111111;
        font-family:"Segoe Print";
        font-size:13px;
        padding:6px 24px;
        text-decoration:none;
        text-shadow:0px 1px 0px #ffffff;
    }
    .myButton:hover {
        background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed));
        background:-moz-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
        background:-webkit-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
        background:-o-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
        background:-ms-linear-gradient(top, #dfdfdf 5%, #ededed 100%);
        background:linear-gradient(to bottom, #dfdfdf 5%, #ededed 100%);
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed',GradientType=0);
        background-color:#dfdfdf;
    }
    .myButton:active {
        position:relative;
        top:1px;
    }
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
		echo "<P style='color:red; text-align:center'>Connected to Restaurant's Database Server.<br></p>";
	}
	

// login	
$sql="SELECT * FROM emp WHERE empid ='".$id."' AND password='".$pass."' AND pid=1";
$result=mysqli_query($conn,$sql);


if (mysqli_num_rows($result) == 1) {
    // output data of each row
    $row = mysqli_fetch_assoc($result); 
        echo "<div>Sucessfully logged in as " . $row["ename"]."<br>";
		
		echo "<a href=http:///localhost/phpmyadmin/tbl_sql.php?db=db2&table=emp&token=bf867eac7105fbb8c15284f90a832790 >Click here to manage employees.</a>";
		
	} else {
   $message = "INVALID CREDENTIALS. ";
echo "<script type='text/javascript'>alert('$message');</script>";
    
}	

unset($sql,$result);
}	

mysqli_close($conn);
?>
</div>

</body>
</html>