<?php
    if(isset($_POST['button1'])) {
        header('location: login.php');
    }
    if(isset($_POST['button2'])) {
        header('location: ngo_login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to iMedicne. A connection between people and NGOs">
    <link rel="stylesheet" href="landing.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>

    <!-- ==========================navbar================================================== -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4f0d5b99; z-index:100;"><div class="container-fluid">
            <a class="navbar-brand" href="landing_page.php"><img class="logo" src="logo.png" alt="logo"></a>
            <a class="navbar-brand" href="landing_page.php">iMeds</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link ml-20" href="#about_us">About Us</a>
                    <a class="nav-item nav-link ml-20" href="contact.html">Contact Us</a>
                </div>
            </div>
            <a class="navbar-brand" href="landing_page.php">Welcome!</a>
            </div>
        </nav>


        <!-- ===========================carousel================================================ -->
        <div class="overlay"><br><br><br><br><br><br><br><br>
            <div class="heading"><img class="logo2" src="logo.png" alt="logo"> iMeds</div>
            <div><h3>Join hands with NGOs and help underprivileged people</h3>
                <h5>With just a few steps, you can help save a life!</h5>
            </div><br>
            <div class="sign-button">
                <form method="POST">
                    <button type="submit" name="button1" class="login_btn" type="">Login as Donor</button>
                    <button type="submit" name="button2" class="login_btn">Login as NGO</button>
                </form>
            </div><br><br><br><br><br><br><br><br><br><br>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="homepage\2.png" alt="Second slide">
                    <div class="d-block justify-content-center align-items-center h-100">
                        <div class="container">
                            <div class="carousel-caption"></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="homepage\1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="homepage\3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev arrow" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next arrow" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </header>

    <!-- ==============================section content============================================ -->

    <main class="mt-5 mb-5" id="about_us">
        <div class="container">
            <h1 class="text-center" style="color:#3d0946"><strong>About Us</strong></h1>
            <hr><br>
            <section>
                <div class="row">
                    <div class="col-md-6 gx-5 mb-4">
                        <div class="bg-image">
                            <img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" />
                        </div>
                    </div>

                    <div class="col-md-6 gx-5 mb-4">
                        <h4><strong>It's an easy choice to make</strong></h4>
                        <p class="text-muted">
                        The company itself is a very successful company. It is easy to choose the consequences of anyone's choice and pain, but from the debts of the truth, whence the lab of the soul is pleased
                        </p>
                        <p><strong>And pain, indeed, from the debts of the truth?</strong></p>
                        <p class="text-muted">
                        It is very important for the customer to pay attention to the adipiscing process. And so with pleasure
                            they do not know that the troubles are happening. Offices, which will be followed.
                        </p>
                    </div>
                </div>
            </section>
            <!-- <hr class="my-5"/> -->
            <section>
                <div class="row">
                    <div class="col-md-6 gx-5 mb-4">
                        <h4><strong>It's an easy choice to make</strong></h4>
                        <p class="text-muted">
                        The company itself is a very successful company. The result is easy
                            let any one choose, and indeed suffer from the debts of the truth, whence the lab of the mind
                        </p>
                        <p><strong>And pain, indeed, from the debts of the truth?</strong></p>
                        <p class="text-muted">
                        It is very important for the customer to pay attention to the adipiscing process. And so with pleasure
                            they do not know that the troubles are happening. The duties which he will pursue.
                        </p>
                    </div>
                    <div class="col-md-6 gx-5 mb-4">
                        <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                            <img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </section>
            <!-- <hr class="my-5"/> -->

        </div>
    </main>

    <!-- =============================footer==================================== -->
    <footer>Made By Priyanshu Jain, Prabhat Patni, Adhiraj Patole</footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</body>
</html>