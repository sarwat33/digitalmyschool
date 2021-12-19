<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$database = "pdf_files";
$connection = mysqli_connect($servername,$username,$password,$database);


?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #212120;
            
        }


        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }


        .row {
            margin: 0 -5px;
        }


        .row:after {
            content: "";
            display: table;
            clear: both;
        }


        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }


        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            /*background-color: #f1f1f1;*/
            background: #C1EDFD;
            height: 300px;
            border: 2px solid black;
            margin-bottom: 10px;
            border-radius: 5px;
            margin-top: 2px;
            
        }

        .container-1 {
            margin-top: 70px;

        }

        .card p {
            font-weight: 700;
            font-family: Arial, Helvetica, sans-serif;

        }

        .card button {

            margin: 0 auto;

        }

        .card img {
            height: 80px;
            width: 80px;
            position: absolute;
            top: 10px;
            left: 10px;
            border-radius: 5px;
            border: 2px solid black;
        }

        .tittle {
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            height: 50px;
            float: none;
            background-color: #BDAFE4;
            border-radius: 5px solid black;

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
   
    <div class="tittle my-2">
        <h2>Question Bank</h2>
    </div>
    <div class="container-1">
        <div class="row">
            <div class="column">
                <div class="card" >
                    <h3>Class 6</h3>

                    <p><span></span>Questions for Class 6</p>
                    
                    <a href="display.php?name=class_6"><button type="button" class="btn btn-primary my-5">View Questions</button></a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <h3>Class 7</h3>

                    <p><span></span>Questions for Class 7</p>
                    <a href="display.php?name=class_7"><button type="button" class="btn btn-primary my-5">View Questions</button></a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <h3>Class 8</h3>
                    <p><span></span>Questions for Class 8</p>
                    <a href="display.php?name=class_8"><button type="button" class="btn btn-primary my-5">View Questions</button></a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <h3>Class 9-10</h3>
                    <p><span></span>Questions for Class 9-10</p>
                    <a href="display.php?name=class_9_10"><button type="button" class="btn btn-primary my-5">View Questions</button></a>
                </div>
            </div>



        </div>
    </div>
    <div class="conatiner-1">
        <div class="row">
            

            <div class="column">
                <div class="card">
                    <h3>Class 11-12</h3>
                    <p><span></span>Questions for Class 11-12</p>
                    <a href="display.php?name=class_11_12"><button type="button" class="btn btn-primary my-5">View Questions</button></a>
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