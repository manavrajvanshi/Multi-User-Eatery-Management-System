<?php
session_start();
$custid= $_SESSION['id'];

?>

<!DOCTYPE html>
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
			table{
				margin:auto;
			}
			div {
				font-family: "Pristina";
				font-style: normal;
				background-color: rgba(255,250,205,0.8);		
				font-size: 2em;
				text-align: center;
				padding:0;
				margin: 10% 30% 0% 30%;
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

			
			
		
		if(!empty($_POST['item'])){
		

		// Loop to store customer id into delivery table with a delivery id.
		$sql="";
		$sql="INSERT INTO deliveries(cid) VALUES('$custid')";
		if(mysqli_query($conn,$sql)){
					//echo "<P style='color:red; text-align:center'>Data inserted into server. <br></p>";
				}
				else{
					echo "<P style='color:red; text-align:center'>Data NOT inserted into server.<br></p>";
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				
			unset($sql);

			
		$sql="SELECT did FROM deliveries WHERE cid ='$custid'order by did desc ";
		$resultdid=mysqli_query($conn,$sql);
				if(mysqli_num_rows($resultdid)>0){
					$row = mysqli_fetch_assoc($resultdid);
					$rowdid=$row["did"];	// did
					
				}
				
		unset($sql);
			
			//var_dump($_POST);
			//loop to insert order details into order_detail table.
		foreach($_POST['item'] as $selected){
		$t = "Qty" . $selected;
		//echo $_POST[$t];
		//echo"<br>";
		$quan=$_POST[$t];
		
		

		$sql="";
		$sql="INSERT INTO order_detail(delid,itemid,quantity) VALUES('$rowdid','$selected','$quan')";
		if(mysqli_query($conn,$sql)){
		//echo $selected."  ";
		//echo $quan."<br>";
					//echo "<P style='color:red; text-align:center'>Data inserted into server. <br></p>";
				}
				else{
					echo "<P style='color:red; text-align:center'>Data NOT inserted into server.<br></p>";
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				
			unset($sql);
			}
			
		$price=0;	
			$query="SELECT menu.itemname, order_detail.quantity, menu.price FROM menu inner join order_detail where menu.itemid=order_detail.itemid and order_detail.delid=$rowdid";
		$result=mysqli_query($conn,$query);
				if(mysqli_num_rows($result)>0){
					
					echo "<table><tr><th>Ordered Item-</th><th>Quantity</th></tr>";
					while($row = mysqli_fetch_assoc($result)){
						echo "<tr><td>".$row["itemname"]."</td><td>" .$row["quantity"]."</td></tr>";
						$itemprice= $row["price"]*$row["quantity"];
						$price = $price + $itemprice;
					}
					echo "</table><br>";
				}
				
			echo "Your bill amount is: Rs.".$price."<br>Your food will be delivered within 45 minutes<br>";

			$sql="INSERT into bill(deliveryid,amount) VALUES ('$rowdid','$price')";
		$result=mysqli_query($conn,$sql);
			
			unset($sql);

		}
		echo "<br> <a href = 'http:///localhost:8044/iwp/welcome.html' >LOGOUT</a>	";
		?>
	</div>
	</body>
</html>