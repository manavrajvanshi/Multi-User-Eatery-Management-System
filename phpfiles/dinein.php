<?php
session_start();
$orderdate=$_SESSION['date'];
$tableno=$_SESSION['table'];
$id= $_SESSION['id'];

echo $orderdate."<br>";
echo $tableno."<br>";
echo $id;

?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			Menu
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
				margin: 2% 35% 5% 35%;
				border:0px solid blue;
			
			}


			h1{
				font-family: "Pristina";
				font-style: normal;
				font-size: 3.2em;
			}
		
			h2{
				text-align: center;
				color: #360a4d;
				size: 36px;
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

	
	
echo "ITEM Quantity"."<br>";
if(!empty($_GET['item'])){


// Loop to store order info into orders table with a delivery id.
$sql="";
$sql="INSERT INTO orders(orderdate,tableno,empid) VALUES('$orderdate','$tableno','$id')";
if(mysqli_query($conn,$sql)){
			echo "<P style='color:red; text-align:center'>Order Entered. <br></p>";
		}
		else{
			echo "<P style='color:red; text-align:center'>Data NOT inserted into server.<br></p>";
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
	unset($sql);

	
$sql="SELECT orderid FROM orders WHERE tableno ='$tableno'order by orderid desc ";
$resultdid=mysqli_query($conn,$sql);
		if(mysqli_num_rows($resultdid)>0){
			$row = mysqli_fetch_assoc($resultdid);
			$rowid=$row["orderid"];	// ordid
			
		}
		
unset($sql);
	
	
	//loop to insert order details into order_detail table.
foreach($_GET['item'] as $selected){
$t = "Qty" . $selected;
$quan=$_GET[$t];


$sql="";
$sql="INSERT INTO order_detail(orid,itemid,quantity) VALUES('$rowid','$selected','$quan')";
if(mysqli_query($conn,$sql)){
		//	echo $selected." ";
//echo $quan."</br>";
			//echo "<P style='color:red; text-align:center'>Data inserted into server. <br></p>";
		}
		else{
			echo "<P style='color:red; text-align:center'>Data NOT inserted into server.<br></p>";
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
	unset($sql);
	}
	
$price=0;	
	$query="SELECT menu.itemname, order_detail.quantity, menu.price FROM menu inner join order_detail where menu.itemid=order_detail.itemid and order_detail.orid=$rowid";
$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result)>0){
			
			echo "<table><tr><th>Item Ordered</th><th>-Quantity</th></tr>";
			while($row = mysqli_fetch_assoc($result)){
				echo "<tr><td>".$row["itemname"]."</td><td>" .$row["quantity"]."</td></tr>";
				$itemprice= $row["price"]*$row["quantity"];
				$price = $price + $itemprice;
			}
			echo "</table></br>";
		}
		
	echo "Your bill amount is: ".$price;

	$sql="INSERT into bill(orderid,amount) VALUES ('$rowid','$price')";
$result=mysqli_query($conn,$sql);
	
	unset($sql);

}
?>
</div>
</body>
</html>