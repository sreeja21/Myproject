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
	float-left:150px;
}
body{
	background-repeat: no-repeat;
    background-size: cover;
}
h1{
	padding-left:150px;
}
.l,p{
	padding-left: 150px;
}
</style>
</head>
<body background="e.jpg">
<h1>Sorry,</h1>
<h1>Requested Tickets are not available </h1>
<h1>Available Tickets..!</h1>
<?php
session_start(); 
$total=$_SESSION['total'];
//echo "<p><font size="+2">$total$</font></p>";
echo "<p> <font  size='4pt'></font> <font size='8pt'><b>$total<b></font></p>";

?>
<div class="l">
<a href="index.php" class="button"><font size="+2" padding-left="50px">Book Tickets</font></a>
</div>
</body>
</html>