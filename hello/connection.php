<!DOCTYPE html>
<html>
<body background="b.jpg">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

session_start();
$name=$_SESSION['name'] ;
$phone=$_SESSION['phone'] ;
$tickets =$_SESSION['tickets'] ;
$tickets = (int)$tickets;
$amount=$_SESSION['amount'];
$amount = (int)$amount;
$total=$_SESSION['total'];
$total=(int)$total;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO main (name, phone, numtickets,amount)
VALUES ('$name', '$phone','$tickets','$amount')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql="UPDATE total SET total='$total'";
//echo $total;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//echo $total;


$conn->close();
?>
</body>
</html>