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
$sql = "SELECT * FROM Pricing_Promo"; 
$result = $conn->query($sql); 
$row = $result->fetch_assoc(); 
$promoText = $row["promoText"]; 
$weekPrice = $row["weekPrice"]; 
$twoWeekPrice = $row["twoWeekPrice"]; 
$monthPrice = $row["monthPrice"]; 
$twentySession = $row["twentySession"]; 
$fortySession = $row["fortySession"]; 
$sixtySession = $row["sixtySession"]; 

if(isset($_POST['20Session']))
{
    $sql = "DELETE FROM Pricing_Promo";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $promoText = "";
    if(isset($_POST['promoText'])){
        $promoText = $_POST['promoText'];
    }

    $weekPrice = $_POST['weekly'];
    $twoWeekPrice = $_POST['biweekly'];
    $monthPrice = $_POST['monthly'];
    $twentySession = $_POST['20Session'];
    $fortySession = $_POST['40Session'];
    $sixtySession = $_POST['60Session'];

    $sql = "INSERT INTO Pricing_Promo (promoText, weekPrice, twoWeekPrice, monthPrice, twentySession, fortySession, sixtySession)
    VALUES ('$promoText', '$weekPrice', '$twoWeekPrice', '$monthPrice', '$twentySession', '$fortySession', '$sixtySession')";

    if ($conn->query($sql) === TRUE) {
        echo "</br>New record created successfully";
    } else {
        echo "</br>Error: " . $sql . "<br>" . $conn->error;
    }
}



?>



<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
    </br>
    </br>
    <div class="row">
        <div class="col-md-4" style="margin-left: 1em;">
            <a href="pricing.php">Back to pricing</a>
        </div>
        <div class="col-md-4">
            <form action="admin.php" method="post" onsubmit="return validation()">
                <div class="form-group">
                    <label for="promoText">Promo Text</label>
                    <input type="text" class="form-control" id="promoText" name="promoText"
                        placeholder="Blank if not current promotion" />
                </div>
                <div class="form-group">
                    <label for="20Session">20 Session - Current Price: <?php echo $twentySession?></label>
                    <input type="number" class="form-control" name="20Session" id="20Session" />
                </div>
                <div class="form-group">
                    <label for="40Session">40 Session - Current Price: <?php echo $fortySession?></label>
                    <input type="number" class="form-control" name="40Session" id="40Session" />
                </div>
                <div class="form-group">
                    <label for="60Session">60 Session - Current Price: <?php echo $sixtySession?></label>
                    <input type="number" class="form-control" name="60Session" id="60Session" />
                </div>
                <div class="form-group">
                    <label for="weekly">Weekly - Current Price: <?php echo $weekPrice?></label>
                    <input type="number" class="form-control" name="weekly" id="weekly" />
                </div>
                <div class="form-group">
                    <label for="biweekly">Bi-Weekly - Current Price: <?php echo $twoWeekPrice?></label>
                    <input type="number" class="form-control" name="biweekly" id="biweekly"/>
                </div>
                <div class="form-group">
                    <label for="monthly">Monthly - Current Price: <?php echo $monthPrice?></label>
                    <input type="number" class="form-control" name="monthly" id="monthly"/>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-3"><?php echo "Current Promo Text: ".$promoText?></div>
    </div>
</body>


<script src="js/jquery-3.2.1.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>

    function validation(){

        if($("#20Session").val() === ""){
            alert("20 sessions is blank");
            return false;
        }

        if($("#40Session").val() === ""){
            alert("40 sessions is blank");
            return false;
        }

        if($("#60Session").val() === ""){
            alert("60 sessions is blank");
            return false;
        }

        if($("#weekly").val() === ""){
            alert("Weekly is blank");
            return false;
        }

        if($("#biweekly").val() === ""){
            alert("Biweekly is blank");
            return false;
        }

        if($("#monthly").val() === ""){
            alert("Monthly is blank");
            return false;
        }



    }

</script>

</html>