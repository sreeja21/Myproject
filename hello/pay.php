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
.a{
	color:white;
	background-color:black;
	height:60px;
}
body{
	background-repeat: no-repeat;
    background-size: cover;
}
p { 
    padding-left: 550px;
	
}
button{ 
    padding-left: 20px;
}

.wrapper {
    padding-left: 550px;
}
.l{
	padding-left: 550px;
}
</style>
</head>
<body background="bg.jpg">

<?php
session_start();
$name=$_SESSION['name'] ;
$phone=$_SESSION['phone'] ;
$tickets =$_SESSION['tickets'] ;
$_SESSION['amount']=0;
//echo $_SESSION['amount'];
$amount=$_SESSION['amount'];
$tickets = (int)$tickets;
$total=$_SESSION['total'];
//echo $total;

?>
<form action="success.php" method="post">
<?php //echo $tickets ,$tickets ;?>
<p><font size="+2" color="black" >No of tickets:<?php  echo $tickets ?></font></p>
<p><font size="+2" color="black" >Amount:<?php  echo (100*$tickets);
$_SESSION['amount']=(100*$tickets); ?></font></p>
<div class="wrapper">
<button type="submit" value="pay" class="a"><font size="+2" padding-left="50px">PayAmount</font></button>
</div>
</form>
<br>
<div class="l">
<a href="index.php" class="button"><font size="+2" color="white" padding-left= "50px">Cancel</font></a>
</div>
</body>
</html>