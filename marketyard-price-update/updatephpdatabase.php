<?php
// Create connection

// Check connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_agro";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){

    $name=$_POST['uname'];
    $date=$_POST['date'];
    $minprice=$_POST['psw1'];
    $maxprice=$_POST['psw2'];

    

    $sql = "INSERT INTO insertdata (date, name, minprice, maxprice) VALUES ('$date', '$name', '$minprice', '$maxprice')";

    $run=mysqli_query($conn,$sql) or die(mysqli_error());
    // $conn->close();

    if($run) {
        
        header('Location:update.php');
    }


}
?>