<!--
* CS340_400_F2015
* Final Project 
* index.html 
* Matt Mayberry
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Always Sunny Inc.</title>
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
        <h1 class="blog-title">Always Sunny Incorporated</h1>
        <p class="lead blog-description">CS340 Final Project by Matt Mayberry</p>
      </div>
      <div class="row">
        <div class="col-sm-8 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title">Customer Database</h2>
              <div class="table-responsive">
              <h3>  </h3>
                <table class="table table-striped">
                  <thead>
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Phone</th>
                      <th>Street Address</th>
                      <th>City</th>
                      <th>State</th>
                      <th>Zip</th>
                  </thead>
                  <tbody>
                    <?php
                    $servername = "oniddb.cws.oregonstate.edu";
                    $username = "mayberrm-db";
                    $password = "6WkeIuOq07u840wg";
                    $dbname = "mayberrm-db";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 

                    $sql = "SELECT * FROM customers";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["id"]."</td><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["phone"]."</td><td>".$row["street"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["zip"]."</td></tr>" ;
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                  </tbody>
              </table>
            </div> <!--table-->

            <div>
              <h4>Add New Customer:</h4>
               <form action="add_customer.php" method="post">
                <div class="form-group form-group-sm">
                  <label for="first_name">First Name</label><br>
                  <input type="text" id="first_name" name="first_name" maxlength="45" size="45" placeholder="First Name"><br><br>
                  <label for="first_name">Last Name</label><br>
                  <input type="text" id="last_name" name="last_name" maxlength="45" size="45" placeholder="Last Name"><br><br>
                  <label for="phone">Phone</label><br>
                  <input type="tel" id="phone" name="phone" maxlength="12" size="12" placeholder="000-000-0000"><br><br>
                  <label for="Address">Address</label><br>
                  <input type="text" id="address" name="address" maxlength="45" size="45" placeholder="Address"><br><br>
                  <label for="city">City</label><br>
                  <input type="text" id="city" name="city" maxlength="45" size="45" placeholder="City"><br><br>
                  <label for="state" name="state">State</label><br>
                  <input type="text" id="state" name="state" maxlength="2" size="2" name="state" placeholder="XX"><br><br>
                  <label for="zip">Zip Code</label><br>
                  <input type="text" id="zip" name="zip" maxlength="5" size="5" placeholder="Zip"><br><br>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div><!--/.add new customer form -->
          </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          
          <div class="sidebar-module">
            <h4>Databases</h4>
                  <ol class="list-unstyled">
                    <li><a href="index.html">1. Overview</a></li>
                    <li><a href="customers.html">2. Customers</a></li>
                    <li><a href="systems.html">3. Systems</a></li>
                    <li><a href="utility-tariffs.html">4. Utility Tariffs</a><li>
                    <li><a href="components.html">5. Components</a></li>
                    <li><a href="installers.html">6. Installers</a></li>
              </ol> 
          </div>
        </div><!-- /.blog-sidebar -->
      </div><!-- /.row -->
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>

