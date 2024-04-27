<?php 
require_once "config.php";
session_start();

// $sql = "SELECT  FROM ngo";
// $all_ngo = $conn -> query($sql);

$sql = "SELECT * FROM users";
$all_ngo = $conn -> query($sql);

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: ngo_login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/836cf00832.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="donor-dashboard.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #4f0d5b; z-index:100;">
        <a class="navbar-brand" href="landing_page.php"><img class="logo" src="logo.png" alt="logo"></a>
        <a class="navbar-brand" href="landing_page.php">iMeds</a>
            
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto"></ul>
          <span class="navbar-text">
          <i class="fa fa-user" aria-hidden="true"></i> <?php echo "Welcome ". $_SESSION['username']?>
          </span>
        </div>
      </nav>

    <!-- MAIN PAGE -->

    <div class="container">
        <div class="profile">
            <div class="welcome-user">
                <h1><?php echo "Hello, ". $_SESSION['username']?></h1>
            </div>
            <div class="yourscore">
                <p>
                <h2 style="color:white">N</h2>
                </p>
            </div>
            <form class="userDetails">
                <p><b>Name of NGO</b> : <?php echo $_SESSION["username"]?></p>
                <p><b>Address</b> : <?php echo $_SESSION["address"]?></p>
                <p><b>Contact Details</b> : <?php echo $_SESSION["phone"]?></p>
                <p><b>Email</b> : <?php echo $_SESSION["email"]?></p>
                <p><b>NGO ID</b> : <?php echo $_SESSION["id"]?></p>

            </form>
            <div class="LogOutButton">
                <button><a href="logout.php">Log Out</a></button>
            </div>
        </div>

        <div class="ngo-cards-container">
            <div class="ngo-card">
                <h3>Donor Details: </h3>
                <div class="user-info">
                    <p>Name: <?php echo $_SESSION["username"]?></p>
                    <p>Address: <?php echo $_SESSION["address"]?> </p>
                    <p>Contact: <?php echo $_SESSION["phone"]?></p>
                    <p>Email: <?php echo $_SESSION["email"]?></p>
                    <hr>
                </div>
                <h3>Medicines Donated Details: </h3>
                <p>Name of medicine: </p>
                <p>Type of medicine: </p>
                <p>Expiry Date: </p>
                <p>Quantity: </p>
                <p>Manufacturer: </p>
                <button class="contact-btn"><a href="#">Contact Donor</a></button>
            </div>

            <div class="ngo-card">
                <h3>Donor Details: </h3>
                <div class="user-info">
                    <p>Name: </p>
                    <p>Address: </p>
                    <p>Contact: </p>
                    <p>Email: </p>
                    <hr>
                </div>
                <h3>Medicines Donated Details: </h3>
                <p>Name of medicine: </p>
                <p>Type of medicine: </p>
                <p>Expiry Date: </p>
                <p>Quantity: </p>
                <p>Manufacturer: </p>
                <button class="contact-btn"><a href="#">Contact Donor</a></button>
            </div>

            <div class="ngo-card">
                <h3>Donor Details: </h3>
                <div class="user-info">
                    <p>Name: </p>
                    <p>Address: </p>
                    <p>Contact: </p>
                    <p>Email: </p>
                    <hr>
                </div>
                <h3>Medicines Donated Details: </h3>
                <p>Name of medicine: </p>
                <p>Type of medicine: </p>
                <p>Expiry Date: </p>
                <p>Quantity: </p>
                <p>Manufacturer: </p>
                <button class="contact-btn"><a href="#">Contact Donor</a></button>
            </div>

            <div class="ngo-card">
                <h3>Donor Details: </h3>
                <div class="user-info">
                    <p>Name: </p>
                    <p>Address: </p>
                    <p>Contact: </p>
                    <p>Email: </p>
                    <hr>
                </div>
                <h3>Medicines Donated Details: </h3>
                <p>Name of medicine: </p>
                <p>Type of medicine: </p>
                <p>Expiry Date: </p>
                <p>Quantity: </p>
                <p>Manufacturer: </p>
                <button class="contact-btn"><a href="#">Contact Donor</a></button>
            </div>

            <div class="ngo-card">
                <h3>Donor Details: </h3>
                <div class="user-info">
                    <p>Name: </p>
                    <p>Address: </p>
                    <p>Contact: </p>
                    <p>Email: </p>
                    <hr>
                </div>
                <h3>Medicines Donated Details: </h3>
                <p>Name of medicine: </p>
                <p>Type of medicine: </p>
                <p>Expiry Date: </p>
                <p>Quantity: </p>
                <p>Manufacturer: </p>
                <button class="contact-btn"><a href="#">Contact Donor</a></button>
            </div>

        </div>

    </div>

</body>

</html>