<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRICELIST</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pricestyle.css">
    <style>
        h1,h3,h5{
            text-align:center;
        }
        .background{
             background-color:#DCDCDC;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MAEKET YARD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="price.php">Price</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Admin</a>
        </li>
      </ul>
      <form class="d-flex" action="searchdate.php" method="post">
        <input class="form-control ml-5" type="date" name="searchdate" placeholder="Search date" aria-label="Search">
        <button class="btn btn-outline-success" name="submit" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="background">
  <br>
<table class="center">
<?php

echo"<h1>PRICE LIST</h1>";


    echo"<tr>
        <th>DATE</th>
        <th>NAME</th>
        <th>MINIMUM PRICE</th>
        <th>MAXIMUM PRICE</th>
    </tr>";



    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_agro";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //echo "connection succesfully...<br>";
    if(isset($_POST['submit'])){
        $searchdate=$_POST['searchdate'];
    }
    $sql="SELECT * FROM `insertdata` where date='$searchdate'";
    $result = mysqli_query($conn,$sql) ;

    $num = mysqli_num_rows($result);
    echo "<h3>" .$num . "  Record found </h3>";
    
    
    if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        //echo var_dump($row);

        
        echo "<tr>";
        echo "<td>".$row['date']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['minprice']."</td>";
        echo "<td>".$row['maxprice']."</td>";
        echo "</tr>";
    }
    }
    echo "</table>";
    ?>
    <br>
    <h5> NOTE : PRICE/20 kilogram</h5>
    <br>
  </div>
    </body>
</html>
