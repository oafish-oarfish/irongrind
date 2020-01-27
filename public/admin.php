<?php

$ini = parse_ini_file('../config/config.ini.php');
$servername = $ini['servername'];     // mydatabase
$username = $ini['username'];     // myuser
$password = $ini['password']; // mypassword
$databasename = $ini['databasename'];   

// Create connection
$conn = new mysqli($servername, $username, $password,$databasename);

// Check connection
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
$sql = "SELECT * FROM Pricing_Promo"; $result = $conn->query($sql); $row =
$result->fetch_assoc(); $promoText = $row["promoText"]; $weekPrice =
$row["weekPrice"]; $twoWeekPrice = $row["twoWeekPrice"]; $monthPrice =
$row["monthPrice"]; $twentySession = $row["twentySession"]; $fortySession =
$row["fortySession"]; $sixtySession = $row["sixtySession"]; ?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  </head>

  <body>
  </br>
</br>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <form>
          <div class="form-group">
            <label for="promoText">Promo Text</label>
            <input
              type="text"
              class="form-control"
              id="promoText"
              placeholder="Blank if not current promotion"
            />
          </div>
          <div class="form-group">
            <label for="20Session">20 Session</label>
            <input type="number" class="form-control" id="20Session" />
          </div>
          <div class="form-group">
            <label for="40Session">40 Session</label>
            <input type="number" class="form-control" id="40Session" />
          </div>
          <div class="form-group">
            <label for="60Session">60 Session</label>
            <input type="number" class="form-control" id="60Session" />
          </div>
          <div class="form-group">
            <label for="weekly">Weekly</label>
            <input type="number" class="form-control" id="weekly" />
          </div>
          <div class="form-group">
            <label for="biweekly">Bi-Weekly</label>
            <input type="number" class="form-control" id="biweekly" />
          </div>
          <div class="form-group">
            <label for="monthly">Monthly</label>
            <input type="number" class="form-control" id="monthly" />
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="col-md-4"></div>
    </div>
  </body>
</html>
