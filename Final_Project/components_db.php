<!--
* CS340_400_F2015
* Final Project 
* components_db.php
* Matt Mayberry
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Components</title>
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
            <h2 class="blog-post-title">Components</h2>
              <div class="table-responsive">
              <h3>  </h3>
                <table class="table table-striped">
                  <thead>
                      <th>ID</th>
                      <th>Model</th>
                      <th>Partn Number</th>
                      <th>Type</th>
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

                    // display components table to components_db.php
                    $sql = "SELECT * FROM components";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["id"]."</td><td>".$row["model"]."</td><td>".$row["part_num"]."</td><td>".$row["type"]."</td></tr>" ;
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
              <h4>Add New Component:</h4>
               <form action="add_component.php" method="post">
                <div class="form-group form-group-sm">
                  <label for="model">Model</label>
                  <input class="form-control" type="text" id="model" name="model"placeholder="Model"><br>
                  <label for="part_num">Part Number</label>
                  <input class="form-control" type="text" id="part_num" name="part_num" placeholder="Part Number"><br>
                  <label for="type">Type</label>
                  <select class="form-control" name="type">
                    <option value="panel">Panel</option>
                    <option value="inverter">Inverter</option>
                    <option value="racking">Racking</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div><!--/.add new component form -->
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>

