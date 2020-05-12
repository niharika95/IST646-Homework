<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Dan's Pizza Shoppe</title>
	<style>
		/* Style for the footer */
			#bottom{
				color: #fff;
				text-align: center;
			}
	</style>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/nav.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<div id="top"> 
	<div id="toptext">
		
	</div> 
</div> 
<div id="maincontainer"> 
	<div id="contentwrapper"> 
		<div id="contentcolumn"> 
			<div class="innertube"> 
				<nav class="subnav">
					<ol class="nav nav-list container-fluid nav-collapse collapse in">
						<li class="active"><a href="index.php" title="">Home</a></li>
						<li><a href="people/index.php" title="">Our People</a></li>
						<li><a href="tour/index.php" title="">Tour</a></li>
					</ol>
				</nav><!-- end subnav -->
				<!-- Shop name -->
				<h1>Dan's Pizza Shoppe!</h1>
				<!-- <div>(eventually, each page will be some includes and a db call only!)</div> -->
				<?php include './phpFormsStart/orderform.php'; ?>
			</div> <!-- end innertube -->
		</div> <!-- end contentcolumn -->
	</div><!-- end contentwrapper -->
</div><!-- end maincontainer -->
<!-- Footer -->
<div id="bottom"> 
	<?php include './phpFormsStart/assets/inc/footer.php' ?>
</div> 
</body> 
</html> 