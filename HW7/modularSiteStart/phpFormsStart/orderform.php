<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/pizza.css" />
	<script type="text/javascript" src="assets/script/pizza.js"></script>
	<style>
		label{
			display: inline;
		}
		/* Style for header */
		.header{
			margin-top: 40px;
			margin-bottom: 40px;
		}
	</style>
</head>
<body>

	<div id="wrapper">
	<!-- Header for Order Form Page: Place Order -->
	<h1 class="header">
		<?php
			$pagename = "Place Order";
			include '/home/MAIN/nrd8504/Sites/646/HW7/modularSiteStart/phpFormsStart/assets/inc/header.php';
		?>
	</h1>

	<h1>Eat more Pizza!</h1>
	<p><img src="./assets/img/hotpizza.png"></p>
	<div id="container">
		<h2>Order a Delicious Pizza!</h2>
	
		<form name="OrderForm" action="phpFormsStart/orderprocess.php"  onsubmit="return validateForm();" method="post">
			<p>Name:  <input type="text" name="customerName"  /></p>
			<p>ID:  <input type="text"  name="customerID"  /></p>
			<p> Check the size of Pizza you would like to order:<br />
				<!-- Note the <label> tags below that allow the user to click on the text! -->
				<div class="radioInput">
				<input type="radio" name ="pizzaSize" value = "P" id="personal"/><label for="personal">Personal<label></div>
				<div class="radioInput">
				<input type="radio" name ="pizzaSize" value = "S" id="small"/><label for="small">Small<label></div>
				<div class="radioInput">
				<input type="radio" name ="pizzaSize" value = "M"  id="medium" checked="true"/><label for="medium">Medium<label></div>
				<div class="radioInput">
				<input type="radio" name ="pizzaSize" value = "L"  id="large"/><label for="large">Large<label></div>
			</p>
			<!-- Radio Button inputs for selecting number of toppings on the pizza -->
			<p>Select the number of toppings you want on your pizza:</p>
			<div class="radioInput">
			<input type="radio" name="pizzaTopping" value="0" id="zero" checked="true" />
			<label for="zero">No Extra Toppings</label>
			</div>
			<div class="radioInput">
			<input type="radio" name="pizzaTopping" value="2" id="one" />
			<label for="one">One Topping</label>
			</div>
			<div class="radioInput">
			<input type="radio" name="pizzaTopping" value="3" id="two" />
			<label for="two">Two Toppings</label>
			</div>
			<div class="radioInput">
			<input type="radio" name="pizzaTopping" value="3.75" id="three" />
			<label for="three">Three Toppings</label>
			</div>
			<p>
				<input type="submit"  name="Submit"  value=" Send Form"  />
			</p>
		</form>
	</div>
</body>
</html>