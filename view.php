<?php

// connecting the files database


$servername = "localhost";
$username = "root";
$password = "";
$database = "pdf_files";

$connection = mysqli_connect($servername,$username,$password,$database);

session_start();
$_SESSION['name'] = $_GET['name'];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #main-content{
            max-width: 800px;
            margin: 0 auto;
            padding: 100px 0 0;
            max-height: 800px;
        }
        .responsive{
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;
            position: relative;
            resize: both;
        }
        .responsive embed{
            position: absolute;
            width: 100%;
            height: 100%;
            resize: both;
        }
    </style>
</head>

<body>


    <div id="main-doc-body">
        <div id="main-content">

            <div class="responsive">
                
                <embed src="pdf/<?php echo $_SESSION['name']; ?>" type="application/pdf">
            </div>
        </div>

    </div>



</body>

</html>