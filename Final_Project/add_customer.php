<!--
* CS340_400_F2015
* Final Project 
* add_customer.php
* Matt Mayberry
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Customer</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
 </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
      </div>
    </div>
    <div class="container">
      <div class="blog-header">
        <img src="logo.png" class="img-rounded">
        <h1 class="blog-title">Fibonacci Energy</h1>
        <p class="lead blog-description">CS340 Final Project by Matt Mayberry</p>
      </div>
     		<div class="row">
       			 <div class="col-sm-8 blog-main">
          			<div class="blog-post">


					<?php
					//Turn on error reporting
					ini_set('display_errors', 'On');

					//Connects to the database
					$servername = "oniddb.cws.oregonstate.edu";
					$username = "mayberrm-db";
					$password = "6WkeIuOq07u840wg";
					$dbname = "mayberrm-db";

					$mysqli = new mysqli($servername, $username, $password, $dbname);
					if ($mysqli ->connect_error) {
                        die("Connection failed: " . $mysqli ->connect_error);
                    } 
					
					// insert form data from customers_db.php into customers sql table	
					if(!($stmt = $mysqli->prepare("INSERT INTO customers(first_name, last_name, phone, street, city, state, zip) VALUES (?,?,?,?,?,?,?)"))){
						echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
					}
					if(!($stmt->bind_param("sssssss",$_POST['first_name'],$_POST['last_name'],$_POST['phone'],$_POST['address'],$_POST['city'],$_POST['state'],$_POST['zip']))){
						echo "Bind failed: "  . $stmt->errno . " " . $stmt->error;
					}
					if(!$stmt->execute()){
						echo "Execute failed: "  . $stmt->errno . " " . $stmt->error;
					} else {
						echo "** Added " . $stmt->affected_rows . " rows to Customers **";
					}
					?>

					<form action="customers_db.php">
					  <input type="submit" class="btn btn-success" value="Return to Customer Database">
					</form><br><br>

					<ol class="list-unstyled">
	                    <li><a href="index.html">1. Overview</a></li>
	                    <li><a href="customers_db.php">2. Customers</a></li>
	                    <li><a href="systems_db.php">3. Systems</a></li>
	                    <li><a href="utility-tariffs_db.php">4. Utility Tariffs</a><li>
	                    <li><a href="components_db.php">5. Components</a></li>
	                    <li><a href="installers_db.php">6. Installers</a></li>
	    			</ol>
	    		</div>
	    		</div>
	    	</div>
	    </div>
    </body>	
</html>
