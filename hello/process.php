
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$name = $_POST["name"];
$phone = $_POST["phone"];
$tickets = $_POST["tickets"];
session_start();
$_SESSION['name'] = $name;
$_SESSION['phone'] = $phone;
$_SESSION['tickets'] = $tickets;
//$tickets= intval($_GET['tickets']);
$tickets=(int)$tickets;
//echo $tickets;

/*it is my new session*/

$sql = "SELECT total FROM total";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["total"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		$_SESSION['total']=$row["total"];
		//echo $_SESSION['total'];
    }
} else {
    echo "0 results";
}
echo $_SESSION['total'];

if ($_SESSION['total']-$tickets <0) {
    echo $_SESSION['total'];
    header('Location: /hello/sorry.php');
}
else
{
	$_SESSION["total"]=$_SESSION["total"]-$tickets;

header('Location: /hello/pay.php');
}

?>