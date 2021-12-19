<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display PDF </title>
    <!-- Bootstrap link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <style>
        body{
            background: #C1EDFD;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Digital My School</a>
        <a class="navbar-brand" href="questions.php"><button type="button" class="btn btn-success">Question Bank </button></a>
        <a class="navbar-brand" href="student.php"><button type="button" class="btn btn-info">Home </button></a>


       
      </div>
    </nav>
    <?php
    
    
    // setting up the connection with the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pdf_files";
    $connection = mysqli_connect($servername,$username,$password,$database);



    $table_name = $_GET['name'];
   

    ?>
    <div class="container my-4">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Serial</th>
                    <th scope="col">Tittle</th>
                    <th scope="col">Button</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM $table_name";
                $result = mysqli_query($connection, $sql);
                $serial_number = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $serial_number = $serial_number + 1;
                    echo "<tr>
          <th scope='row'> $serial_number </th>
          <td>" . $row['tittle'] . "</td>
          <td><button type='button' class='btn btn-outline-primary'><a href='view.php?name=$row[file]' class='underline'>View File</a></button></td>
          <td><button type='button' class='btn btn-outline-primary'><a href='download.php?file_name=$row[file]' class='underline'>Download</a></button></td>


        </tr>";
                };


                ?>
            </tbody>

        </table>
    </div>

    <footer>
      <p>
        View Option doesn't work for mobile , try downloading
      </p>
    </footer>



    <?php

    //include "connection.php";
    //$sql = "SELECT * FROM pdf";
    //$result = mysqli_query($connection, $sql);
    //$serial_number = 0;
    //while ($row = mysqli_fetch_array($result)) {
    //  $serial_number = $serial_number + 1;

    //
    ?>





    <!--<embed src="pdf/" type="application/pdf" width="1000" height="1000"><br><br>-->
    <?php





    ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();

    });
  </script>

</body>

</html>