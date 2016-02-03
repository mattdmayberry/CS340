<!--
* CS340_400_F2015
* Final Project 
* systems_db.php
* Matt Mayberry
-->
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
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Systems</title>
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
            <h2 class="blog-post-title">Systems</h2>
              <div class="table-responsive">
              <h3>  </h3>
                <table class="table table-striped">
                  <thead>
                    <th>ID</th>
                    <th>Account</th>
                    <th>Street</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Installer</th>
                    <th>Panel</th>
                    <th>Tariff</th>
                  </thead>
                  <tbody>
                    <?php
                    // create stystem summary table
                    $sql = "SELECT s.id AS id, s.street AS street, s.city AS city, s.state AS state, c.last_name AS last, i.name AS name, co.model AS model, u.tariff AS tariff
                            FROM systems s
                            INNER JOIN customers c ON c.id = s.c_id
                            INNER JOIN installers i ON i.id = s.i_id
                            INNER JOIN components co ON co.id = s.pan_id
                            INNER JOIN utility_tariffs u ON u.id = s.tar_id
                            GROUP BY s.id";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["id"]."</td><td>".$row["last"]."</td><td>".$row["street"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["name"]."</td><td>".$row["model"]."</td><td>".$row["tariff"]."</td></tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                  </tbody>
              </table>
            </div> <!--table-->

            <div>
              <h4>Add New System:</h4>
               <form action="add_system.php" method="post">
                <div class="form-group form-group-sm">
                  <label for="address">Address</label><br>
                  <input class="form-control" type="text" id="address" name="address" placeholder="Address"><br>
                  <label for="city">City</label><br>
                  <input class="form-control" type="text" id="city" name="city" placeholder="City"><br>
                  <label for="state" name="state">State</label><br>
                  <select class="form-control" name="state" placeholder="Select State">
                    <option value="AK">AK</option>
                    <option value="AL">AL</option>
                    <option value="AR">AR</option>
                    <option value="AZ">AZ</option>
                    <option value="CA">CA</option>
                    <option value="CO">CO</option>
                    <option value="CT">CT</option>
                    <option value="DC">DC</option>
                    <option value="DE">DE</option>
                    <option value="FL">FL</option>
                    <option value="GA">GA</option>
                    <option value="HI">HI</option>
                    <option value="IA">IA</option>
                    <option value="ID">ID</option>
                    <option value="IL">IL</option>
                    <option value="IN">IN</option>
                    <option value="KS">KS</option>
                    <option value="KY">KY</option>
                    <option value="LA">LA</option>
                    <option value="MA">MA</option>
                    <option value="MD">MD</option>
                    <option value="ME">ME</option>
                    <option value="MI">MI</option>
                    <option value="MN">MN</option>
                    <option value="MO">MO</option>
                    <option value="MS">MS</option>
                    <option value="MT">MT</option>
                    <option value="NC">NC</option>
                    <option value="ND">ND</option>
                    <option value="NE">NE</option>
                    <option value="NH">NH</option>
                    <option value="NJ">NJ</option>
                    <option value="NM">NM</option>
                    <option value="NV">NV</option>
                    <option value="NY">NY</option>
                    <option value="OH">OH</option>
                    <option value="OK">OK</option>
                    <option value="OR">OR</option>
                    <option value="PA">PA</option>
                    <option value="RI">RI</option>
                    <option value="SC">SC</option>
                    <option value="SD">SD</option>
                    <option value="TN">TN</option>
                    <option value="TX">TX</option>
                    <option value="UT">UT</option>
                    <option value="VA">VA</option>
                    <option value="VT">VT</option>
                    <option value="WA">WA</option>
                    <option value="WI">WI</option>
                    <option value="WV">WV</option>
                    <option value="WY">WY</option>
                  </select><br>
                  <label for="zip">Zip Code</label><br>
                  <input class="form-control" type="text" id="zip" name="zip" placeholder="Zip (Example: 94947)"><br>
                  <label for="c_id">Customer</label><br>
                  <input class="form-control" type="text" id="c_id" name="c_id" placeholder="Customer ID"><br>
                  <label for="i_id">Installer</label><br>
                  <input class="form-control" type="text" id="i_id" name="i_id" placeholder="Installer ID"><br>
                  <label for="pan_id">Panel</label><br>
                  <input class="form-control" type="text" id="pan_id" name="pan_id" placeholder="Panel ID"><br>
                  <label for="inv_id">Inverter</label><br>
                  <input class="form-control" type="text" id="inv_id" name="inv_id" placeholder="Inverter ID"><br>
                  <label for="rac_id">Racking</label><br>
                  <input class="form-control" type="text" id="rac_id" name="rac_id" placeholder="Racking ID"><br>
                  <label for="tar_id">Utility Tariff</label><br>
                  <input class="form-control" type="text" id="tar_id" name="tar_id" placeholder="Utility Tariff ID"><br>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div><!--/.add new customer form -->
          </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          
          <div class="sidebar-module">
            <h4>Databases</h4>
                  <ol class="list-unstyled">
                    <li><a href="index.html">1. Overview</a></li>
                    <li><a href="customers_db.php">2. Customers</a></li>
                    <li><a href="systems_db.php">3. Systems</a></li>
                    <li><a href="utility-tariffs_db.php">4. Utility Tariffs</a><li>
                    <li><a href="components_db.php">5. Components</a></li>
                    <li><a href="installers_db.php">6. Installers</a></li>
              </ol> 
          </div>
        </div><!-- /.blog-sidebar -->
      </div><!-- /.row -->
    </div><!-- /.container -->
    <?php
    $conn->close();
    ?><!--close server connection-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>

