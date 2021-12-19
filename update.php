<?php

$inserted = false;

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Update Page</title>
    <style>
        .container {
            height: 220px;
            width: 350px;
            background: #90ACE6;
            border: 5px solid black;
            border-radius: 5px;
            margin-top: 80px;

        }
        .container-1{
            height: 120px;
            width: 350px;
            background: #C1FD9D;
            border: 5px solid black;
            border-radius: 5px;
            margin-top: 80px;
            margin: 0 auto;
            padding: 10px;
            text-align: center;
            padding-top: 35px;
        }
        #message{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ;
            font-weight: bold;
        }

        

        body {
            background: #C1FD9D;

        }

        #dropdown {
            background: #AACDDF;
        }

        #tittle {
            border: 2px solid black;
            margin-bottom: 3px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Page</a>
            <img src="icon.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="questions.php">Question Bank</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="student.php">Students List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login.php"><button type="button" class="btn btn-success" name="Logout">Logout</button></a>

                    </li>


                </ul>
                <!-- try placing a login logout button here -->

            </div>
        </div>
    </nav>

    <div class="container ">
        <form class="" action="update.php" method="post" enctype="multipart/form-data">

            <label for="">Choose Your PDF File</label><br>
            <input type="file" name="pdf" value="" required accept="application/pdf">

            <br><br>
            <label for="" id="tittle">Tittle of the File</label>
            <input type="text" name="tittle" required><br><br>
            <label for="">Select Class</label>
            <select name="dropdown" id="dropdown" required>
                <option value="class_6">6</option>
                <option value="class_7">7</option>
                <option value="class_8">8</option>
                <option value="class_9_10">9-10</option>
                <option value="class_11_12">11-12</option>
            </select>

            <input type="submit" name="submit" value="Upload">
    </div>



    <?php

    // including the database
    include "connection.php";
    if (isset($_POST['submit'])) {
        $selected_class = $_POST['dropdown'];
        $tittle = $_POST['tittle'];
        $pdf = $_FILES['pdf']['name'];
        $pdf_type = $_FILES['pdf']['type'];
        $pdf_size = $_FILES['pdf']['size'];
        $pdf_temporary_location = $_FILES['pdf']['tmp_name'];
        $pdf_moved_location = "pdf/" . $pdf;
        move_uploaded_file($pdf_temporary_location, $pdf_moved_location);
        //pdf   
        $sql = "INSERT INTO $selected_class VALUES(NULL,'$tittle','$pdf')";
        $query = mysqli_query($connection, $sql);
        echo '<div class="container-1">
        <span id="message">File Uploaded Successfully!!!</span>
        </div>';
    }


    ?>





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