<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "SCHOLARSHOME";
$connection = mysqli_connect($servername,$username,$password,$database);

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">



  <title>Hello, world!</title>
  <style>
    .box {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #404742;
      width: 80%;
      margin: 0 auto;
      border-radius: 5px;
      color: white;
      font-weight: 200;
      padding-bottom: 15px;

    }

    .underline {
      text-decoration: none;
    }

    body {
      /*background: linear-gradient(120deg,#2980b9, #8e44ad);*/
      background: #BDAFE4;
    }
  </style>
</head>

<body>
  <!-- navigation bar -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Digital My School</a>
      <a class="navbar-brand" href="questions.php"><button type="button" class="btn btn-success">Question Bank</button></a>
      <a class="navbar-brand" href="student.php"><button type="button" class="btn btn-success">Home </button></a>
      <a class="navbar-brand" href="login.php"><button type="button" class="btn btn-success">Admin</button></a>

      
    </div>
  </nav>





  <div class="container my-5">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">Serial</th>
          <th scope="col">Student Name</th>
          <th scope="col">Class</th>

          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php

        $sql = 'SELECT * FROM `view`';
        $result = mysqli_query($connection, $sql);
        $serial_number = 0;
        while ($row = mysqli_fetch_assoc($result)) {
          $serial_number = $serial_number + 1;
          echo "<tr>
          <th scope='row'> $serial_number </th>
          <td>" . $row['Student_Name'] . "</td>
          <td>" . $row['Current_Class'] . "</td>
          <td><button type='button' class='btn btn-outline-primary'><a href='profile.php?name=$row[Student_Name]&class=$row[Current_Class]&roll=$row[Roll]&registration=$row[Registration_Number]&jsc_roll=$row[JSC_ROLL]&ssc_roll=$row[SSC_ROLL]&hsc_roll=$row[HSC_ROLL]&section=$row[section]' class='underline'>View Profile</a></button></td>
        </tr>";
        };


        ?>
      </tbody>

    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable({
        "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]], //this is your new code
        "iDisplayLength": 25 //this is your new code for number of records on page
      });


    });
  </script>
  





</body>

</html>