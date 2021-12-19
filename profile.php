<?php

session_start();
$_SESSION['name'] = $_GET['name'];
$_SESSION['roll'] = $_GET['roll'];
$_SESSION['class'] = $_GET['class'];
$_SESSION['registration'] = $_GET['registration'];
$_SESSION['jsc_roll'] = $_GET['jsc_roll'];
$_SESSION['ssc_roll'] = $_GET['ssc_roll'];
$_SESSION['hsc_roll'] = $_GET['hsc_roll'];
$_SESSION['section'] = $_GET['section'];


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>View Page</title>
    <style>
        .card{
            
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
        margin-top: 50px;
    

        }
        
        .card-link{
            text-decoration: none;
        }
        .list-group-item{
            text-align: center;
        }
        #header{
            text-align: center;
            color: white;
        }
        #ResultButton {
            margin-right: 18px;
        }
        #navbar{
            width: 100%;
        }
        body{
            background-color: #BDAFE4;
        }
        .card{
            background: #212120;
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
  
 
    <div class="container">
        <div class="card " style="width: 18rem;">
            
            <div class="card-body">
                <h5 class="card-title"><h3 id="header">Student Profile</h3></h5>
                
            </div>
            <ul class="list-group list-group-flush">
                <h4><li class="list-group-item"><?php echo $_SESSION['name'] ;?></li></h4>
                <h5><li class="list-group-item">Class: <?php echo $_SESSION['class'] ;?></li></h5>
                <h5><li class="list-group-item">Roll: <?php echo $_SESSION['roll'] ;?></li></h5>
                <h5><li class="list-group-item">Roll: <?php echo $_SESSION['section'] ;?></li></h5>

                
            </ul>
            <div class="card-body">
                <a href='results.php?' class="card-link"><button type="button" class="btn btn-warning" id="ResultButton">Result</button></a>
                <a href='questions.php' class="card-link"><button type="button" class="btn btn-info" id="QuestionBankButton">Question Bank</button></a>

                
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
</body>

</html>