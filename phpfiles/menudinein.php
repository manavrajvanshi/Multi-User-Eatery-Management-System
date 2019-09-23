<?php
session_start();
$orderdate=$_SESSION['date'];
$tableno=$_SESSION['table'];
$id= $_SESSION['id'];

?>

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

			.veg
			{
				color: #12ac0f;
				size: 20px;
			}
			.nveg
			{
				color: #dc251b;
				size: 20px;
			}
		</style>
	</head>

	<body>

		<div>
			<h1 align=center>
				Menu
			</h1>
				<table>
					<form action="dinein.php" method="get">
						<tr>
							<td colspan = "3">
								<h2>
									<u>
										Starters
									</u>
								</h2>
							</td>
						</tr>
						
						<tr>
							<td colspan = "3">
								<h3 class = "veg">
									<u>
										Vegetarian
									</u>
								</h3>
							</td>
						</tr>
						
						<tr>
							<td>
								<input type="checkbox" name="item[]" value="01">
							</td>
							<td>
								Paneer Tikka <b>Rs. 80</b>
							</td>
							<td>
								<select name="Qty01">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>
								<input type="checkbox" name="item[]" value="02">
							</td>
							<td>
								Samosa <b>Rs. 80</b>
							</td>
							<td>
								<select name="Qty02">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>
								<input type="checkbox" name="item[]" value="03">
							</td>
							<td>
								Crispy Chilli Potato <b>Rs. 80</b>
							</td>
							<td>
								<select name="Qty03">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>
								<input type="checkbox" name="item[]" value="04">
							</td>
							<td>
								Spring Rolls <b>Rs. 80</b>
							</td>
							<td>
								<select name="Qty04">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>

						<tr>
							<td colspan = "3">
								<h3 class = "nveg">
									<u>
										Non-Vegetarian
									</u>
								</h3>
							</td>
						</tr>
						
						<tr>
							<td>
								<input type="checkbox" name="item[]" value="05">
							</td>
							<td>
								Chicken Lollipop <b>Rs. 100</b>
							</td>
							<td>
								<select name="Qty05">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>
								<input type="checkbox" name="item[]" value="06">
							</td>
							<td>
								Mutton Seekh Kebab <b>Rs. 120</b>
							</td>
							<td>
								<select name="Qty06">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>
								<input type="checkbox" name="item[]" value="07">
							</td>
							<td>
								Crispy Chilli Chicken <b>Rs. 100</b>
							</td>
							<td>
								<select name="Qty07">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>
								<input type="checkbox" name="item[]" value="08">
							</td>
							<td>
								Chicken Wings <b>Rs. 90</b>
							</td>
							<td>
								<select name="Qty08">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td colspan = "3">
								<h2>
									<u>
										Curries
									</u>
								</h2>
							</td>
						</tr>
						
						<tr>
							<td colspan = "3">
								<h3 class = "nveg">
									<u>
										Non-Vegetarian
									</u>
								</h3>
							</td>
						</tr>
						
						<tr>
							<td>
								<input type="checkbox" name="item[]" value="09">
							</td>
							<td>
								Butter Chicken <b>Rs. 90</b>
							</td>
							<td>
								<select name="Qty09">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>
								<input type="checkbox" name="item[]" value="10">
							</td>
							<td>
								Rogan Josh <b>Rs. 180</b>
							</td>
							<td>
								<select name="Qty10">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>
								<input type="checkbox" name="item[]" value="11">
							</td>
							<td>
								Chicken Korma <b>Rs. 180</b>
							</td>
							<td>
								<select name="Qty11">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>
								<input type="checkbox" name="item[]" value="12">
							</td>
							<td>
								Chicken Tikka Masala <b>Rs. 170</b>
							</td>
							<td>
								<select name="Qty12">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>

						<tr>
							<td colspan = "3">
								<h3 class = "veg">
									<u>
										Vegetarian
									</u>
								</h3>
							</td>
						</tr>
						
						<tr>
							<td>
								<input type="checkbox" name="item[]" value="13">
							</td>
							<td>
								Vindaloo <b>Rs. 180</b>
							</td>
							<td>
								<select name="Qty13">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>
								<input type="checkbox" name="item[]" value="14">
							</td>
							<td>
								Channa Masala <b>Rs. 140</b>
							</td>
							<td>
								<select name="Qty14">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>
								<input type="checkbox" name="item[]" value="15">
							</td>
							<td>
								Mixed Vegetable <b>Rs. 140</b>
							</td>
							<td>
								<select name="Qty15">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>
								<input type="checkbox" name="item[]" value="16">
							</td>
							<td>
								Paneer Butter Masala <b>Rs. 160</b>
							</td>
							<td>
								<select name="Qty16">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>
						
						
						
						<tr>
							<td colspan = "3">
								<h2>
									<u>
										Breads
									</u>
								</h2>
							</td>
						</tr>
						
						<tr>
							<td>
								<input type="checkbox" name="item[]" value="19">
							</td>
							<td>
								Naan <b>Rs. 20</b>
							</td>
							<td>
								<select name="Qty19">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>
								<input type="checkbox" name="item[]" value="20">
							</td>
							<td>
								Butter Roti <b>Rs. 15</b>
							</td>
							<td>
								<select name="Qty20">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>
								<input type="checkbox" name="item[]" value="21">
							</td>
							<td>
								Kulcha <b>Rs. 40</b>
							</td>
							<td>
								<select name="Qty21">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>
								<input type="checkbox" name="item[]" value="22">
							</td>
							<td>
								Paratha <b>Rs. 30</b>
							</td>
							<td>
								<select name="Qty22">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td colspan = "3">
								<h2>
									<u>
										For The Sweet Tooth
									</u>
								</h2>
							</td>
						</tr>
						
						<tr>
							<td>
								<input type="checkbox" name="item[]" value="25">
							</td>
							<td>
								Ice Cream Sundae <b>Rs. 80</b>
							</td>
							<td>
								<select name="Qty25">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>
								<input type="checkbox" name="desser" value="26">
							</td>
							<td>
								Choco Lava Cake <b>Rs. 70</b>
							</td>
							<td>
								<select name="Qty26">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>
								<input type="checkbox" name="item[]" value="27">
							</td>
							<td>
								Laddoo Parfrait <b>Rs. 80</b>
							</td>
							<td>
								<select name="Qty27">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>

						
						
						<tr>
							<td colspan = "3">
								<h2>
									<u>
										Thirst Quenchers
									</u>
								</h2>
							</td>
						</tr>
						
						<tr>
							<td>
								<input type="checkbox" name="item[]" value="28">
							</td>
							<td>
								Pina Colada <b>Rs. 65</b>
							</td>
							<td>
								<select name="Qty28">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>
								<input type="checkbox" name="item[]" value="29">
							</td>
							<td>
								Mojito <b>Rs. 65</b>
							</td>
							<td>
								<select name="Qty29">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>
								<input type="checkbox" name="item[]" value="31">
							</td>
							<td>
								Lassi <b>Rs. 60</b>
							</td>
							<td>
								<select name="Qty">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>
								<input type="checkbox" name="item[]" value="31">
							</td>
							<td>
								Lassi <b>Rs. 60</b>
							</td>
							<td>
								<select name="Qty31">
									<option>
										1
									</option>
									<option>
										2
									</option>
									<option>
										3
									</option>
									<option>
										4
									</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td colspan = "3">
								<input type="submit" value="Order">
							</td>
						</tr>
					</form>
				</table>
		</div>
	</body>
</html>
