<!DOCTYPE html>
<html>
<head>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
body{
	background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body background="c.jpg">
<?php include 'connection.php';
$total=$_SESSION['total'];
//echo $total;?>
<h1>Successfully Booked..!</h1>
<!--a href="index.php" class="button"><font size="+2" color="white" padding-left= "50px"-->
<a href="index.php" class="button"><font size="+2" >Book</a>
</body>
</html>
