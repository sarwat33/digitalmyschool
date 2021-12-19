<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "SCHOLARSHOME";

session_start();


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Results Page</title>
    <style>
        footer {
            text-align: center;
            padding: 3px;
            background-color: #070708;
            color: white;
        }
        body{
            background-color: #070708;
        }
        #header{
            text-align: center;
        }
        #text{
            text-align: center;
            text-decoration: none;
            color: white;
        }
        
    </style>
    

</head>

<body>
<!-- navigation bar -->
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Digital My School</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="student.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="questions.php">Question</a>
            </li>
            
          </ul>
          
        </div>
      </div>
    </nav>

<div class="row row-cols-1 row-cols-md-3 g-4 my-5">
        <div class="col">
            <div class="card h-100">
                
                <div class="card-body">
                    <h5 class="card-title" id="header">JSC RESULT</h5>
                    <p class="card-text" id="header">JSC RESULT OF <?php echo $_SESSION['name'] ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <label id="header">Registration Number<li class="list-group-item" id="header"><?php echo $_SESSION['registration'] ?></li></label> 
                    <label id="header">Roll Number<li class="list-group-item" id="header"><?php echo $_SESSION['jsc_roll'] ?></li></label> 
                    <button type="button" class="btn btn-success"><a href="http://www.educationboardresults.gov.bd/" id="text">Visit For Details</a></button>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                
                <div class="card-body">
                    <h5 class="card-title" id="header">SSC RESULT</h5>
                    <p class="card-text" id="header">SSC RESULT OF <?php echo $_SESSION['name'] ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <label id="header">Registration Number  <li class="list-group-item" id="header"><?php echo $_SESSION['registration'] ?></li></label>
                    <label id="header">Roll Number <li class="list-group-item" id="header"><?php echo $_SESSION['jsc_roll'] ?></li></label>
                    <button type="button" class="btn btn-success"><a href="http://www.educationboardresults.gov.bd/" id="text">Visit For Details</a></button>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                
                <div class="card-body">
                    <h5 class="card-title" id="header">HSC RESULT</h5>
                    <p class="card-text" id="header">HSC RESULT OF <?php echo $_SESSION['name'] ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <label id="header">Registration Number<li class="list-group-item" id="header"><?php echo $_SESSION['registration'] ?></li></label>
                    <label id="header">Roll Number<li class="list-group-item" id="header"><?php echo $_SESSION['hsc_roll'] ?></li></label> 
                    <button type="button" class="btn btn-success"><a href="http://www.educationboardresults.gov.bd/" id="text">Visit For Details</a></button>
                </ul>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <footer>
        <p>Visit Education Board's Website for Details<br>
            <a href="http://www.educationboardresults.gov.bd/">Click Here</a>
        </p>
        
    </footer>
</body>

</html>