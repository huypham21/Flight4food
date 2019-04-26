<!DOCTYPE html>
<html lang="en">
<head>
   <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link href="styles/awesomplete.css" rel="stylesheet" id="awesomplete-css">
   <link href="styles/styles.css" rel="stylesheet" id="styles">

   <script src="js/jquery-3.3.1.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/awesomplete.js"></script>
   <script src="js/results.js"></script>
   <!------ Include the above in your HEAD tag ---------->
</head>
<body>
   <?php include 'functions/siteJumbotron.php';?>
   
   <?php 
   include 'functions/index2/createIndex2.php';
   createIndex2($_POST);
   ?>
   
		
	<?php include 'functions/siteFooter.php';?>
</body>
</html>